<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('personnes')->insert([
            //INSERT THE PICTURES LATER
            [
                'id' => '1',
                'nom' => 'Frank Darabont',
                'dateNaissance' => '1959-01-28',
                'LieuNaissance' => 'Montbéliard, France',
                'photo' => 'https://th.bing.com/th/id/R.bccd9a38b9bac4e02775455f326a1195?rik=inhjhLVJ%2bvGNow&pid=ImgRaw&r=0',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '2',
                'nom' => 'Francis Ford Coppola',
                'dateNaissance' => '1939-04-07',
                'LieuNaissance' => 'Detroit, Michigan, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.a1HR6NEdo-oJXA0DR_bfNAHaE8?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '3',
                'nom' => 'Quentin Tarantino',
                'dateNaissance' => '1963-03-27',
                'LieuNaissance' => 'Knoxville, Tennessee, USA',
                'photo' => 'https://www.indiewire.com/wp-content/uploads/2019/07/shutterstock_10248532cm-2.jpg',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '4',
                'nom' => 'Ridley Scott',
                'dateNaissance' => '1937-11-30',
                'LieuNaissance' => 'South Shields, County Durham, England',
                'photo' => 'https://i0.wp.com/www.seenit.co.uk/wp-content/uploads/RIDLEY-SCOTT_-Council-_Contour_Getty-Images.jpg?resize=2000%2C3000',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '5',
                'nom' => 'Lana Wachowski',
                'dateNaissance' => '1965-06-21',
                'LieuNaissance' => 'Chicago, Illinois, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.bptq_2tZBcpZoV4PlWuUDwAAAA?pid=ImgDet&w=394&h=500&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '6',
                'nom' => 'David Fincher',
                'dateNaissance' => '1962-08-28',
                'LieuNaissance' => 'Denver, Colorado, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.t6vjYMIV73AP7G3NE8XCzwHaFE?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '7',
                'nom' => 'Christopher Nolan',
                'dateNaissance' => '1970-07-30',
                'LieuNaissance' => 'London, England',
                'photo' => 'https://th.bing.com/th/id/R.33fd9318b39a0ba141800a0e1b52c3b6?rik=SZGixEeHlAotXg&pid=ImgRaw&r=0',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '8',
                'nom' => 'Steven Spielberg',
                'dateNaissance' => '1946-12-18',
                'LieuNaissance' => 'Cincinnati, Ohio, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.j75_ZZKp3kV3guLN1ZJ_mQHaFj?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '9',
                'nom' => 'James Cameron',
                'dateNaissance' => '1954-08-16',
                'LieuNaissance' => 'Kapuskasing, Ontario, Canada',
                'photo' => 'https://th.bing.com/th/id/OIP.j6zFaofT3XKLNFX2VfhqlgHaE8?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            [
                'id' => '10',
                'nom' => 'Joss Whedon',
                'dateNaissance' => '1964-06-23',
                'LieuNaissance' => 'New York City, New York, USA',
                'photo' => 'https://th.bing.com/th/id/OIP.lC8GhjNIFHrdVY7lREGFHQHaFc?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Réalisateur',
            ],
            //NEW
            [
                'id' => '11',
                'nom' => 'Niki Marvin',
                'dateNaissance' => '0000-01-01',//INCONNU
                'LieuNaissance' => 'Inconnu',
                'photo' => 'https://th.bing.com/th/id/OIP.bICzlt9162wIvo1CsY1qjAAAAA?pid=ImgDet&rs=1',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '12',
                'nom' => 'Albert S. Ruddy',
                'dateNaissance' => '1930-03-28',
                'LieuNaissance' => 'Montreal, Quebec, Canada',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTkwNzY5NjQwMF5BMl5BanBnXkFtZTgwNTUzNzMwMzI@._V1_.jpg',
                'rolePrincipal' => 'Producteur',
            ],
            [
                'id' => '13',
                'nom' => 'Albert S. Ruddy',
                'dateNaissance' => '1930-03-28',
                'LieuNaissance' => 'Montreal, Quebec, Canada',
                'photo' => 'https://m.media-amazon.com/images/M/MV5BMTkwNzY5NjQwMF5BMl5BanBnXkFtZTgwNTUzNzMwMzI@._V1_.jpg',
                'rolePrincipal' => 'Producteur',
            ],


        ]);
    }
}
