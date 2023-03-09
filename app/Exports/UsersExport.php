<?php

namespace App\Exports;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;


class UsersExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return User::where('pack_id' , backpack_user()->pack_id)->get();
    // }

    public function view(): View {
        return view('vendor.backpack.base.export' , [
            'users' => User::where('pack_id' , backpack_user()->pack_id)->get()
        ]);
    }
}
