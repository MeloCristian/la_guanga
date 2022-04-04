<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Articulo;
use App\Models\Categoria;
use App\Models\TipoUsuario;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    private $articulos = array(
        array(
            'nombre' => 'Mochila Arhuaca',
            'precio' => 68000,
            'existencias' => 10,
            'img' => 'https://i.pinimg.com/550x/c1/cd/da/c1cddad59eb376f9ca4817a6dcae1860.jpg',
            'id_categoria' => 1,
            'descripcion' => 'La mochila arhuaca o tutu iku en ika es una prenda de la indumentaria de la etnia arhuaca y una de las artesanías más importantes de Colombia.​​Es un tejido de lana de oveja, algodón, fique o lana industrial, elaborado por las gwati desde niñas',
        ),
        array(
            'nombre' => 'Manilla Yaco (Agua)',
            'precio' => 2000,
            'existencias' => 3,
            'img' => 'https://artesaniasdecolombia.com.co/Documentos/Galeria/7175_biako-manillas-chaquiras.jpg',
            'id_categoria' => 3,
            'descripcion' => 'Una manilla cuyos símbolos se relacionan con seres protectores de la naturaleza, que se encuentran en estos lugares como huasikamas o cuidadores del entorno donde vive el pueblo inga. Estos son maestros, pero también son guerreros; por lo tanto, enseñan y reprenden; su objetivo es y será orientar y proteger.',
        ),
        array(
            'nombre' => 'Funda para cojín gris',
            'precio' => 16000,
            'existencias' => 12,
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/61h3UWv%2B4XL._SX522_.jpg',
            'id_categoria' => 2,
            'descripcion' => 'Funda de cojín perfecta para regalar a tus seres queridos',
        ),
        array(
            'nombre' => 'Mochila Arhuaca',
            'precio' => 68000,
            'existencias' => 10,
            'img' => 'https://i.pinimg.com/550x/c1/cd/da/c1cddad59eb376f9ca4817a6dcae1860.jpg',
            'id_categoria' => 1,
            'descripcion' => 'La mochila arhuaca o tutu iku en ika es una prenda de la indumentaria de la etnia arhuaca y una de las artesanías más importantes de Colombia.​​Es un tejido de lana de oveja, algodón, fique o lana industrial, elaborado por las gwati desde niñas',
        ),
        array(
            'nombre' => 'Manilla Yaco (Agua)',
            'precio' => 2000,
            'existencias' => 3,
            'img' => 'https://artesaniasdecolombia.com.co/Documentos/Galeria/7175_biako-manillas-chaquiras.jpg',
            'id_categoria' => 3,
            'descripcion' => 'Una manilla cuyos símbolos se relacionan con seres protectores de la naturaleza, que se encuentran en estos lugares como huasikamas o cuidadores del entorno donde vive el pueblo inga. Estos son maestros, pero también son guerreros; por lo tanto, enseñan y reprenden; su objetivo es y será orientar y proteger.',
        ),
        array(
            'nombre' => 'Funda para cojín gris',
            'precio' => 16000,
            'existencias' => 12,
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/61h3UWv%2B4XL._SX522_.jpg',
            'id_categoria' => 2,
            'descripcion' => 'Funda de cojín perfecta para regalar a tus seres queridos',
        ),
        array(
            'nombre' => 'Mochila Arhuaca',
            'precio' => 68000,
            'existencias' => 10,
            'img' => 'https://i.pinimg.com/550x/c1/cd/da/c1cddad59eb376f9ca4817a6dcae1860.jpg',
            'id_categoria' => 1,
            'descripcion' => 'La mochila arhuaca o tutu iku en ika es una prenda de la indumentaria de la etnia arhuaca y una de las artesanías más importantes de Colombia.​​Es un tejido de lana de oveja, algodón, fique o lana industrial, elaborado por las gwati desde niñas',
        ),
        array(
            'nombre' => 'Manilla Yaco (Agua)',
            'precio' => 2000,
            'existencias' => 3,
            'img' => 'https://artesaniasdecolombia.com.co/Documentos/Galeria/7175_biako-manillas-chaquiras.jpg',
            'id_categoria' => 3,
            'descripcion' => 'Una manilla cuyos símbolos se relacionan con seres protectores de la naturaleza, que se encuentran en estos lugares como huasikamas o cuidadores del entorno donde vive el pueblo inga. Estos son maestros, pero también son guerreros; por lo tanto, enseñan y reprenden; su objetivo es y será orientar y proteger.',
        ),
        array(
            'nombre' => 'Funda para cojín gris',
            'precio' => 16000,
            'existencias' => 12,
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/61h3UWv%2B4XL._SX522_.jpg',
            'id_categoria' => 2,
            'descripcion' => 'Funda de cojín perfecta para regalar a tus seres queridos',
        ),
        array(
            'nombre' => 'Mochila Arhuaca',
            'precio' => 68000,
            'existencias' => 10,
            'img' => 'https://i.pinimg.com/550x/c1/cd/da/c1cddad59eb376f9ca4817a6dcae1860.jpg',
            'id_categoria' => 1,
            'descripcion' => 'La mochila arhuaca o tutu iku en ika es una prenda de la indumentaria de la etnia arhuaca y una de las artesanías más importantes de Colombia.​​Es un tejido de lana de oveja, algodón, fique o lana industrial, elaborado por las gwati desde niñas',
        ),
        array(
            'nombre' => 'Manilla Yaco (Agua)',
            'precio' => 2000,
            'existencias' => 3,
            'img' => 'https://artesaniasdecolombia.com.co/Documentos/Galeria/7175_biako-manillas-chaquiras.jpg',
            'id_categoria' => 3,
            'descripcion' => 'Una manilla cuyos símbolos se relacionan con seres protectores de la naturaleza, que se encuentran en estos lugares como huasikamas o cuidadores del entorno donde vive el pueblo inga. Estos son maestros, pero también son guerreros; por lo tanto, enseñan y reprenden; su objetivo es y será orientar y proteger.',
        ),
        array(
            'nombre' => 'Funda para cojín gris',
            'precio' => 16000,
            'existencias' => 12,
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/61h3UWv%2B4XL._SX522_.jpg',
            'id_categoria' => 2,
            'descripcion' => 'Funda de cojín perfecta para regalar a tus seres queridos',
        ),
        array(
            'nombre' => 'Mochila Arhuaca',
            'precio' => 68000,
            'existencias' => 10,
            'img' => 'https://i.pinimg.com/550x/c1/cd/da/c1cddad59eb376f9ca4817a6dcae1860.jpg',
            'id_categoria' => 1,
            'descripcion' => 'La mochila arhuaca o tutu iku en ika es una prenda de la indumentaria de la etnia arhuaca y una de las artesanías más importantes de Colombia.​​Es un tejido de lana de oveja, algodón, fique o lana industrial, elaborado por las gwati desde niñas',
        ),
        array(
            'nombre' => 'Manilla Yaco (Agua)',
            'precio' => 2000,
            'existencias' => 3,
            'img' => 'https://artesaniasdecolombia.com.co/Documentos/Galeria/7175_biako-manillas-chaquiras.jpg',
            'id_categoria' => 3,
            'descripcion' => 'Una manilla cuyos símbolos se relacionan con seres protectores de la naturaleza, que se encuentran en estos lugares como huasikamas o cuidadores del entorno donde vive el pueblo inga. Estos son maestros, pero también son guerreros; por lo tanto, enseñan y reprenden; su objetivo es y será orientar y proteger.',
        ),
        array(
            'nombre' => 'Funda para cojín gris',
            'precio' => 16000,
            'existencias' => 12,
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/61h3UWv%2B4XL._SX522_.jpg',
            'id_categoria' => 2,
            'descripcion' => 'Funda de cojín perfecta para regalar a tus seres queridos',
        ),
        array(
            'nombre' => 'Mochila Arhuaca',
            'precio' => 68000,
            'existencias' => 10,
            'img' => 'https://i.pinimg.com/550x/c1/cd/da/c1cddad59eb376f9ca4817a6dcae1860.jpg',
            'id_categoria' => 1,
            'descripcion' => 'La mochila arhuaca o tutu iku en ika es una prenda de la indumentaria de la etnia arhuaca y una de las artesanías más importantes de Colombia.​​Es un tejido de lana de oveja, algodón, fique o lana industrial, elaborado por las gwati desde niñas',
        ),
        array(
            'nombre' => 'Manilla Yaco (Agua)',
            'precio' => 2000,
            'existencias' => 3,
            'img' => 'https://artesaniasdecolombia.com.co/Documentos/Galeria/7175_biako-manillas-chaquiras.jpg',
            'id_categoria' => 3,
            'descripcion' => 'Una manilla cuyos símbolos se relacionan con seres protectores de la naturaleza, que se encuentran en estos lugares como huasikamas o cuidadores del entorno donde vive el pueblo inga. Estos son maestros, pero también son guerreros; por lo tanto, enseñan y reprenden; su objetivo es y será orientar y proteger.',
        ),
        array(
            'nombre' => 'Funda para cojín gris',
            'precio' => 16000,
            'existencias' => 12,
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/61h3UWv%2B4XL._SX522_.jpg',
            'id_categoria' => 2,
            'descripcion' => 'Funda de cojín perfecta para regalar a tus seres queridos',
        ),
        array(
            'nombre' => 'Mochila Arhuaca',
            'precio' => 68000,
            'existencias' => 10,
            'img' => 'https://i.pinimg.com/550x/c1/cd/da/c1cddad59eb376f9ca4817a6dcae1860.jpg',
            'id_categoria' => 1,
            'descripcion' => 'La mochila arhuaca o tutu iku en ika es una prenda de la indumentaria de la etnia arhuaca y una de las artesanías más importantes de Colombia.​​Es un tejido de lana de oveja, algodón, fique o lana industrial, elaborado por las gwati desde niñas',
        ),
        array(
            'nombre' => 'Manilla Yaco (Agua)',
            'precio' => 2000,
            'existencias' => 3,
            'img' => 'https://artesaniasdecolombia.com.co/Documentos/Galeria/7175_biako-manillas-chaquiras.jpg',
            'id_categoria' => 3,
            'descripcion' => 'Una manilla cuyos símbolos se relacionan con seres protectores de la naturaleza, que se encuentran en estos lugares como huasikamas o cuidadores del entorno donde vive el pueblo inga. Estos son maestros, pero también son guerreros; por lo tanto, enseñan y reprenden; su objetivo es y será orientar y proteger.',
        ),
        array(
            'nombre' => 'Funda para cojín gris',
            'precio' => 16000,
            'existencias' => 12,
            'img' => 'https://images-na.ssl-images-amazon.com/images/I/61h3UWv%2B4XL._SX522_.jpg',
            'id_categoria' => 2,
            'descripcion' => 'Funda de cojín perfecta para regalar a tus seres queridos',
        ),

    );

    private $categorias = array(
        array(
            'id' => 1,
            'nombre' => 'Mochilas y bolsos',
            'descripcion' => 'Todo lo relacionado con mochilas y bolsos tejidos completamente a mano y con diseños exclusivos',
        ),
        array(
            'id' => 2,
            'nombre' => 'Cojines',
            'descripcion' => 'Todo lo relacionado con cojines tejidos completamente a mano y con diseños exclusivos',
        ),
        array(
            'id' => 3,
            'nombre' => 'Manillas',
            'descripcion' => 'Todo lo relacionado con manillas',
        ),

    );

    private $arrayUsers = array(
        array(
            'name' => 'Mario jose',
            'email' => 'mario@gmail.com',
            'password' => "password",
            "id_tipo_usuario" => 1
        ),
        array(
            'name' => 'Maria Guerrerp',
            'email' => 'maria@gmail.com',
            'password' => "password",
            "id_tipo_usuario" => 1
        ),
        array(
            'name' => 'Daniel Espada',
            'email' => 'daniel@gmail.com',
            'password' => "password",
            "id_tipo_usuario" => 1
        ),
        array(
            'name' => 'Cristian Melo',
            'email' => 'cristian@gmail.com',
            'password' => "password",
            "id_tipo_usuario" => 1
        )
    );



    public function run()
    {
        //::seedCategorias();
        //$this->command->info('Tabla categorías iniciada con datos!');
        // self::seedCatalog();
        //$this->command->info('Tabla catálogo iniciada con datos!');        
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }

    private function seedCatalog()
    {
        DB::table('articulos')->delete();
        foreach ($this->articulos as $articulo) {
            $p = new Articulo();
            $p->nombre = $articulo['nombre'];
            $p->descripcion = $articulo['descripcion'];
            $p->precio = $articulo['precio'];
            $p->existencias = $articulo['existencias'];
            $p->id_categoria = $articulo['id_categoria'];
            $p->img = $articulo['img'];
            $p->save();
        }
    }

    private function seedCategorias()
    {
        DB::table('categorias')->delete();
        foreach ($this->categorias as $categoria) {
            $p = new Categoria();
            $p->id = $categoria['id'];
            $p->nombre = $categoria['nombre'];
            $p->descripcion = $categoria['descripcion'];
            $p->save();
        }
    }

    private function seedUsers()
    {
        DB::table('tipo_usuario')->delete();
        $tipo = new TipoUsuario();
        $tipo->id = 1;
        $tipo->tipo = 'admin';
        $tipo->descripcion = 'Acceso a todas las funciones';
        $tipo->save();

        DB::table('users')->delete();
        foreach ($this->arrayUsers as $user) {
            $p = new User();
            $p->name = $user['name'];
            $p->email = $user['email'];
            $p->password = Hash::make($user['password']);
            $p->id_tipo_usuario = $user['id_tipo_usuario'];
            $p->save();
        }
    }
}
