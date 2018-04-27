<?php

namespace Ttsoft\NganLuong\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Ttsoft\NganLuong\Repositories\Eloquent\EloquentNganluongRepository;
use Maatwebsite\Excel\Facades\Excel;
use Ttsoft\NganLuong\Exports\ContactExports;
class ContactController extends Controller
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
