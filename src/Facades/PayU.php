<?php
namespace CodemanCompany\LaravelPayU\Facades;
use Illuminate\Support\Facades\Facade;
class PayU extends Facade {
	protected static function getFacadeAccessor() {
		return 'PayU';
	}	// end method
}	// end class