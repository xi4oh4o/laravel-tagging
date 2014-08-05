<?php namespace Conner\Tagging;

class Tagged extends \Eloquent {

	protected $table = 'tagging_tagged';
	public $timestamps = true;
	protected $fillable = ['tag_name', 'tag_slug'];

	public function taggable() {
		return $this->morphTo();
	}

}
