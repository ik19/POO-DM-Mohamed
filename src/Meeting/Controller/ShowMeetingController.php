<?php

declare(strict_types=1);

namespace Meeting\Controller;

use Application\Controller\ErrorController;
use Meeting\Exception\MeetingNotFoundException;
use Meeting\Repository\MeetingRepository;

final class ShowMeetingController
{
    /**
     * @var MeetingRepository
     */
    private $meetingRepository;

// Constructor
    public function __construct(MeetingRepository $meetingRepository)
    {
        $this->meetingRepository = $meetingRepository;
    }

    public function indexAction() : string
    {
        try {
            $meeting = $this->meetingRepository->getOrganiser($_GET['name'] ?? '');
            $participant = $this->meetingRepository->getParticipant($_GET['name'] ?? '');

            ob_start();
            include __DIR__.'/../../../views/meeting-details.phtml';
            return ob_get_clean();
        } catch (MeetingNotFoundException $exception) {
            return (new ErrorController($exception))->error404Action();
        }
    }

}


