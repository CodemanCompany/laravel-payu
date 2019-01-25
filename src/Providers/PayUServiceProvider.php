<?php
namespace CodemanCompany\LaravelPayU\Providers;
use Illuminate\Support\ServiceProvider;
use CodemanCompany\LaravelPayU\PayU;

class PayUServiceProvider extends ServiceProvider {
	public function boot() {
	}	// end method

	public function register() {
		$this -> app -> singleton( 'PayU', new PayU() );
	}	// end method
}	// end class