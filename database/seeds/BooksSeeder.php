<?php

use Illuminate\Database\Seeder;

use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->isbn = 'ES111';
        $book->title = 'Harry Potter y La Piedra Filosofal';
        $book->author = 'J.K. Rawling';
        $book->sinopsis = 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y del insoportable primo Dudley. 
                            Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vida para siempre. 
                            En ella le comunican que ha sido aceptado como alumno en el colegio interno Hogwarts de magia y hechicería. 
                            A partir de ese momento, la suerte de Harry da un vuelco espectacular. En esa escuela tan especial aprenderá encantamientos, 
                            trucos fabulosos y tácticas de defensa contra las malas artes. Se convertirá en el campeón escolar de quidditch, 
                            especie de fútbol aéreo que se juega montado sobre escobas, y se hará un puñado de buenos amigos... aunque también 
                            algunos temibles enemigos. Pero sobre todo, conocerá los secretos que le permitirán cumplir con su destino. 
                            Pues, aunque no lo parezca a primera vista, Harry no es un chico común y corriente. ¡Es un verdadero mago!';
        $book->pages = 256;

        $book->save();


        $book = new Book();
        $book->isbn = 'ES222';
        $book->title = 'Harry Potter y La Cámara Secreta';
        $book->author = 'J.K. Rawling';
        $book->sinopsis = 'Tras derrotar una vez más a lord Voldemort, su siniestro enemigo en Harry Potter y la piedra filosofal, Harry espera 
                            impaciente en casa de sus insoportables tíos el inicio del segundo curso del Colegio Hogwarts de Magia y Hechicería. Sin embargo, 
                            la espera dura poco, pues un elfo aparece en su habitación y le advierte que una amenaza mortal se cierne sobre la escuela. Así pues, 
                            Harry no se lo piensa dos veces y, acompañado de Ron, su mejor amigo, se dirige a Hogwarts en un coche volador. Pero ¿puede un aprendiz 
                            de mago defender la escuela de los malvados que pretenden destruirla? Sin saber que alguien ha abierto la Cámara de los Secretos, dejando 
                            escapar una serie de monstruos peligrosos, Harry y sus amigos Ron y Hermione tendrán que enfrentarse con arañas gigantes, serpientes encantadas, 
                            fantasmas enfurecidos y, sobre todo, con la mismísima reencarnación de su más temible adversario.';
        $book->pages = 288;

        $book->save();
                            
    }
}
