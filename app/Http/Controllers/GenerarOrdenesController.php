<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GeneraOrdenes;
use DB;
use Auth;

class GenerarOrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodos=DB::select("SELECT * FROM aniolectivo"); 
        $jornadas=DB::select("SELECT * FROM jornadas"); 
        $ordenes=DB::select("SELECT o.especial, o.fecha, j.jor_descripcion, o.mes, a.anl_descripcion 
                             FROM ordenes_generadas o
                             JOIN matriculas m ON m.id=o.mat_id
                             JOIN jornadas j ON j.id=m.jor_id
                             JOIN aniolectivo a ON a.id=m.anl_id
                             GROUP BY o.especial, o.fecha, j.jor_descripcion, o.mes, a.anl_descripcion
                             ORDER BY o.especial
                             "); 

        $meses= $this->meses();
        return view('generaOrdenes.index')
        ->with('periodos', $periodos)
        ->with('jornadas', $jornadas)
        ->with('meses', $meses)
        ->with('ordenes', $ordenes)
        ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

public function meses(){
    return [ 
        '1'=> "ENERO",
        '2'=> 'FEBRERO',
        '3'=> 'MARZO',
        '4'=> 'ABRIL',
        '5'=> 'MAYO',
        '6'=> 'JUNIO',
        '7'=> 'JULIO',
        '8'=> 'AGOSTO',
        '9'=> 'SEPTIEMBRE',
        '10'=> 'OCTUBRE',
        '11'=> 'NOVIEMBRE',
        '12'=> 'DICIEMBRE',
    ];
}

public function mesesLetra($nmes){
    $result="";

    $nmes==1?$result="E":"";
    $nmes==2?$result="F":"";
    $nmes==3?$result="M":"";
    $nmes==4?$result="A":"";
    $nmes==5?$result="My":"";
    $nmes==6?$result="J":"";
    $nmes==6?$result="Jl":"";
    $nmes==6?$result="Ag":"";
    $nmes==6?$result="S":"";
    $nmes==6?$result="O":"";
    $nmes==6?$result="N":"";
    $nmes==6?$result="D":"";
    return $result;

}




public function generarOrdenes(Request $rq){
$datos=$rq->all();
$anl_id=$datos['anl_id'];
$jor_id=$datos['jor_id'];
$mes=$datos['mes'];
$nmes=$this->mesesLetra($mes);
$campus="G";

$validar=DB::select("SELECT * FROM ordenes_generadas o
                    JOIN matriculas m ON m.id=mat_id
                    WHERE m.anl_id=$anl_id
                    AND m.jor_id=$jor_id
                    AND o.mes=$mes
                    ");

if(empty($validar)){



$secuenciales=DB::selectone("SELECT max(especial) as secuencial FROM ordenes_generadas");
$sec=$secuenciales->secuencial+1;


$estudiantes=DB::select(" SELECT *, m.id as mat_id FROM matriculas m 
                         JOIN estudiantes e ON m.est_id=e.id 
                         JOIN jornadas j ON m.jor_id=j.id 
                         JOIN cursos c ON m.cur_id=c.id 
                         JOIN especialidades esp ON m.esp_id=esp.id 
                         WHERE m.anl_id=$anl_id
                         AND m.jor_id=$jor_id
                         AND m.mat_estado=1
                         ");
$valor_pagar=75;


foreach($estudiantes as $e){
    $input['mat_id']=$e->mat_id;   //id de la matricula
    $input['codigo']=$nmes.$campus.$e->jor_obs.$e->cur_obs.$e->esp_obs."-".$e->mat_id;
    $input['fecha']=date ('Y-m-d');
    $input['valor']=$valor_pagar;
    $input['fecha_pago']=null;
    $input['valor']=null;
    $input['estado']=null;
    $input['mes']=$mes;
    $input['respondsable']=Auth::user()->usu_nombre;
    $input['especial']=$sec;
    GeneraOrdenes::create($input);
}

return redirect(route('genera_ordenes.index'));

}else{
    dd("Ya existe orden");
}

}

public function matricula(){
    return $this->belongsTo(Matricula::class, "mat_id","id");
}



public function eliminarOrdenes(Request $rq)
{
   $dt=$rq->all();
    $secuencial = $dt['secuencial']; // Obtener el número de secuencia desde la solicitud
    $ordenes = GeneraOrdenes::where('especial', $secuencial)->delete();
    session()->flash('success', 'Orden eliminada');
    return redirect(route('genera_ordenes.index'));
}




}

