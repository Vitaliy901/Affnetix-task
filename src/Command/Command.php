<?php

namespace App\Command;

use App\Command\CommandInterface;
use App\ETL\Extract;

class Command implements CommandInterface
{
    public array $links = [
        'https://www.trustpilot.com/review/wg.casino
         https://www.trustpilot.com/review/payments.astropay.com
         https://www.trustpilot.com/review/blockbets.casino
         https://www.trustpilot.com/review/bitspin365.com
         https://www.trustpilot.com/review/wazbee.casino'
    ];

    private array $DTO = [];

    public function __construct() {
    }

        public function run()
    {

        if (!empty($this->links))
        {
            foreach ($this->links as $link) {
                $this->DTO[] = Extract::get($link);
            }
        }

        if (!empty($this->DTO)) {
            // $new Transform($this->DTO);
        }
    }
}