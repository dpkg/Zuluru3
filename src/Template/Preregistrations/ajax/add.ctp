<?= $this->element('People/search_results', ['extra_url' => [__('Add Preregistration') => ['controller' => 'Preregistrations', 'action' => 'add', 'event' => $event->id]]]);