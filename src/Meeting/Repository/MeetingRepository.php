<?php

declare(strict_types=1);

namespace Meeting\Repository;

use Meeting\Collection\OrganiserCollection;
use Meeting\Collection\ParticipantCollection;
use Meeting\Collection\MeetingCollection;
use Meeting\Entity\Meeting;
use Meeting\Entity\Organiser;
use Meeting\Entity\Participant;
use Meeting\Exception\MeetingNotFoundException;

use PDO;

final class MeetingRepository
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll() : MeetingCollection
    {
		$result = $this->pdo->query('SELECT id, title, description, date_start, date_end FROM meetings');
		$meetings = [];
        while( $meeting = $result->fetch() )
        {
			$meetings[] = new Meeting((int)$meeting['id'], (string)$meeting['title'],(string)$meeting['description'],(string)$meeting['date_debut'],(string)$meeting['date_fin']);
		}
            dump($meetings);
        return new MeetingCollection(...$meetings);
    }

    public function getOrganiser(string $name) : OrganiserCollection
    {
        $statement = $this->pdo->prepare('SELECT u.id, u.name, u.firstname FROM users as u INNER JOIN organisers as o ON o.id_user = u.id WHERE o.id_meeting = :id_meeting');
        $statement->execute([':id_meeting' => $name]);
        $organisers = $statement->fetchall();
        if (!$organisers)
        {
            throw new MeetingNotFoundException();
        }
        $collection = [];
        foreach ($organisers as $organiser)
        {
            $collection[] = new Organiser($organiser['name'], $organiser['firstname']);
        }
        return new OrganiserCollection(...$collection);
    }

    public function getParticipant(string $name) : ParticipantCollection
    {
        $statement = $this->pdo->prepare('SELECT u.id, u.name, u.firstname FROM users as u INNER JOIN participants as p ON p.id_user = u.id WHERE p.id_meeting = :id_meeting');
        $statement->execute([':id_meeting' => $name]);
        $participants = $statement->fetchall();
        if (!$participants)
        {
            throw new MeetingNotFoundException();
        }
        $collection = [];
        foreach ($participants as $participant)
        {
            $collection[] = new Participant($participant['name'], $participant['firstname']);
        }
        return new ParticipantCollection( ...$collection);
    }

}
