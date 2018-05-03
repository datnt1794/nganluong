<?php

namespace Ttsoft\Nganluong\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Ttsoft\Nganluong\Repositories\Eloquent\EloquentNganluongRepository;
use Maatwebsite\Excel\Facades\Excel;
use Ttsoft\Nganluong\Exports\ContactExports;
class NganluongController extends Controller
{
	/**
	 *
	 * @return attribute for user
	 *
	 */
	protected $repository;

    protected $export;

	public function __construct(EloquentNganluongRepository $repository , ContactExports $export){
		$this->repository = $repository;
        $this->export = $export;
	}


    public function index(Request $request){
        dd(1);
    }
}
