<?php

namespace App\Exports\Sheets;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Models\User;
class UsersPerPackSheet implements FromQuery , WithTitle
{
    private $pack;
    

    public function __construct(int $pack)
    {
        $this->pack = $pack;
    }

    /**
     * @return Builder
     */
    public function query()
    {
        return User
            ::query()
            ->where('pack_id', $this->pack);
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Pack  ' . $this->pack;
    }
}
