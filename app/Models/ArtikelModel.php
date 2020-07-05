<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArtikelModel{
    
    protected $fillable = ['slug'];

    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }

    public static function save($data){
        unset($data["_token"]);
        $new_artikel = DB::table('artikel')->insert($data);
        return $new_artikel;
    }

    public static function find_by_id($idartikel){
        $artikel = DB::table('artikel')->where('idartikel', $idartikel)->first();
        return $artikel;
    }
    
    public static function update($idartikel, $request){
        $artikel = DB::table('artikel')
                        ->where('idartikel', $idartikel)
                        ->update([
                                'judul' => $request['judul'],
                                'isi' => $request['isi'],
                        ]);
        return $artikel;
    }

    public static function destroy($idartikel){
        $deleted = DB::table('artikel')
                    ->where('idartikel', $idartikel)
                    ->delete();
        return $deleted;
    }

}
