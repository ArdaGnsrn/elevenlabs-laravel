<?php

namespace ArdaGnsrn\ElevenLabs\Commands;

use Illuminate\Console\Command;

class ElevenLabsCommand extends Command
{
    public $signature = 'elevenlabs-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
