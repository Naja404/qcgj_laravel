<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Services\RoleService;

class RoleRuleModel extends Model {

	protected $table = 'qcgj_role_rule';

	protected $fillable = ['module', 'module_title', 'action_title', 'action_url', 'sort', 'type', 'status', 'created_time'];

}
