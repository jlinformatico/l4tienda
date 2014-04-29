<?php
class Producto extends Eloquent  {
 
    protected $table = 'producto';
    protected $fillable = array('descripcion', 'precio', 'vendedor_id');

    public function vendedor(){
        // creamos una relación con el modelo de Vendedor
        return $this->BelongsTo('Vendedor', 'vendedor_id');
    }
 
    public static function agregarProducto($input){
        
        $respuesta = array();
 
        $reglas =  array(
            'vendedor_id'  => 'required',
            'descripcion'  => array('required', 'max:255'),  
            'precio' => array('required', 'numeric'),
        );
        
        $validator = Validator::make($input, $reglas);
        
        if ($validator->fails()){
            $respuesta['mensaje'] = $validator;
            $respuesta['error']   = true;
        }else{
            
            $producto = static::create($input);
                              
            $respuesta['mensaje'] = 'Producto creado!';
            $respuesta['error']   = false;
            $respuesta['data']    = $producto;
        }
        
        return $respuesta;
    }
}
