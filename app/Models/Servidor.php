<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    use HasFactory;

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'servidor';

	/**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_servidor';

	/**
	 * Indicates if the IDs are auto-incrementing.
	 *
	 * @var bool
	 */
	public $incrementing = true;

	/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = [
		'id_servidor',
	];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'id_orgao', 'id_public', 'id_anexo', 'id_cargos', 'id_simbol', 'cpf', 'matricula', 'nome', 'vinculo', 'id_funcao', 'vencimento', 'gratificacao', 'dt_nomeacao', 'num_diario', 'dt_diario', 'dt_posse', 'decreto', 'situacao', 'num_portaria', 'dt_portaria', 'exo_contar', 'exo_dt_decreto', 'exo_num_diario', 'exo_dt_diario', 'dt_inicio', 'dt_termino', 'adm', 'observacao', 'tor_efeito', 'disp_portaria', 'id_lotacao',
	];
}
