    <?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClienteTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(ProdutoTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(ConfiguracoesTableSeeder::class);
        $this->call(ContatoTableSeeder::class);
        $this->call(EmpresaTableSeeder::class);
        $this->call(NewsletterTableSeeder::class);
        $this->call(OrcamentoTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(RedeSociaisTableSeeder::class);
        $this->call(LogisticaTableSeeder::class);
        $this->call(GaleriaTableSeeder::class);
        $this->call(GaleriaImagensTableSeeder::class);
        $this->call(FraseHomeTableSeeder::class);
        $this->call(ParceirosTableSeeder::class);
        $this->call(LinhaDestaqueTableSeeder::class);
        $this->call(FraseProdutoTableSeeder::class);
        $this->call(ManutencaoTableSeeder::class);

    }
}
