<?php

namespace wiki_data;

use Illuminate\Database\Eloquent\Model;

class WikiData extends Model
{
    protected $tables = 'wiki_datas';
    protected $hidden = ['DEL_FLG','UPD_DATE','remember_token'];
}
