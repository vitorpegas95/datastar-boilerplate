<?php

namespace App\Actions;

use starfederation\datastar\ServerSentEventGenerator;

class DecrementAction
{
    public function handle(ServerSentEventGenerator $sse)
    {
        $signals = ServerSentEventGenerator::readSignals();
        $currentCount = $signals['count'] ?? 0;
        $newCount = $currentCount - 1;

        // Prepare the updated component HTML
        ob_start();
        include __DIR__ . '/../templates/components/my_component.php';
        $html = ob_get_clean();

        // Send the updated signal and the new HTML fragment
        $sse->mergeSignals(['count' => $newCount]);
        $sse->mergeFragments($html, ['selector' => '#dynamic-content']);
    }
}