<?php 
class Benchmark
{
	public $start;
	public $end;
	public function start(){
		$this->start = microtime(true);
	}
	public function end(){
		$this->end = microtime(true);
	}
	public function elapsedTime(int $round = null){
		$time = $this->end - $this->start;
		if(!is_null($round)){
			$time = round($time,$round);
		}
		return (float)$time;
	}
}