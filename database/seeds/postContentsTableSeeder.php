<?php

use Illuminate\Database\Seeder;
use \App\postContent;

class postContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pc = new postContent();
        $pc->post_id = 1;
        $pc->content = "1 Bacon ipsum dolor amet consectetur sint reprehenderit sunt drumstick, ut bacon boudin shank excepteur flank jowl. Ham ullamco aliqua, brisket ea dolore tail ad anim occaecat fugiat ribeye tenderloin. Ham hock ea cillum labore, chicken pastrami shankle. Exercitation ex est laborum nulla ipsum jerky jowl. Pork salami occaecat, bacon duis ut cow swine turkey jerky tongue laborum dolore sint. Ball tip shank biltong nulla flank pork loin ground round laborum officia cupim non pariatur swine pork.
                        Rump ex labore ribeye landjaeger boudin culpa minim andouille in voluptate ham hock cupim dolor turducken. Consectetur ut ipsum, eu pancetta in veniam hamburger. Ribeye nisi pork chop dolor tempor. Tongue pork capicola, prosciutto aliquip ground round tenderloin cupim. Pork chop dolore pork anim boudin nulla ut pastrami drumstick occaecat turducken bacon strip steak. Capicola prosciutto aliquip swine esse, sunt ut mollit corned beef exercitation nostrud chicken veniam deserunt do. Pork loin nisi cow, ex landjaeger kielbasa tail est hamburger ball tip labore pork turducken.";
        $pc->save();

        $pc = new postContent();
        $pc->post_id = 2;
        $pc->content = "2 Bacon ipsum dolor amet consectetur sint reprehenderit sunt drumstick, ut bacon boudin shank excepteur flank jowl. Ham ullamco aliqua, brisket ea dolore tail ad anim occaecat fugiat ribeye tenderloin. Ham hock ea cillum labore, chicken pastrami shankle. Exercitation ex est laborum nulla ipsum jerky jowl. Pork salami occaecat, bacon duis ut cow swine turkey jerky tongue laborum dolore sint. Ball tip shank biltong nulla flank pork loin ground round laborum officia cupim non pariatur swine pork.
                        Rump ex labore ribeye landjaeger boudin culpa minim andouille in voluptate ham hock cupim dolor turducken. Consectetur ut ipsum, eu pancetta in veniam hamburger. Ribeye nisi pork chop dolor tempor. Tongue pork capicola, prosciutto aliquip ground round tenderloin cupim. Pork chop dolore pork anim boudin nulla ut pastrami drumstick occaecat turducken bacon strip steak. Capicola prosciutto aliquip swine esse, sunt ut mollit corned beef exercitation nostrud chicken veniam deserunt do. Pork loin nisi cow, ex landjaeger kielbasa tail est hamburger ball tip labore pork turducken.";
        $pc->save();

        $pc = new postContent();
        $pc->post_id = 3;
        $pc->content = "3 Bacon ipsum dolor amet consectetur sint reprehenderit sunt drumstick, ut bacon boudin shank excepteur flank jowl. Ham ullamco aliqua, brisket ea dolore tail ad anim occaecat fugiat ribeye tenderloin. Ham hock ea cillum labore, chicken pastrami shankle. Exercitation ex est laborum nulla ipsum jerky jowl. Pork salami occaecat, bacon duis ut cow swine turkey jerky tongue laborum dolore sint. Ball tip shank biltong nulla flank pork loin ground round laborum officia cupim non pariatur swine pork.
                        Rump ex labore ribeye landjaeger boudin culpa minim andouille in voluptate ham hock cupim dolor turducken. Consectetur ut ipsum, eu pancetta in veniam hamburger. Ribeye nisi pork chop dolor tempor. Tongue pork capicola, prosciutto aliquip ground round tenderloin cupim. Pork chop dolore pork anim boudin nulla ut pastrami drumstick occaecat turducken bacon strip steak. Capicola prosciutto aliquip swine esse, sunt ut mollit corned beef exercitation nostrud chicken veniam deserunt do. Pork loin nisi cow, ex landjaeger kielbasa tail est hamburger ball tip labore pork turducken.";
        $pc->save();

        $pc = new postContent();
        $pc->post_id = 4;
        $pc->content = "4 Bacon ipsum dolor amet consectetur sint reprehenderit sunt drumstick, ut bacon boudin shank excepteur flank jowl. Ham ullamco aliqua, brisket ea dolore tail ad anim occaecat fugiat ribeye tenderloin. Ham hock ea cillum labore, chicken pastrami shankle. Exercitation ex est laborum nulla ipsum jerky jowl. Pork salami occaecat, bacon duis ut cow swine turkey jerky tongue laborum dolore sint. Ball tip shank biltong nulla flank pork loin ground round laborum officia cupim non pariatur swine pork.
                        Rump ex labore ribeye landjaeger boudin culpa minim andouille in voluptate ham hock cupim dolor turducken. Consectetur ut ipsum, eu pancetta in veniam hamburger. Ribeye nisi pork chop dolor tempor. Tongue pork capicola, prosciutto aliquip ground round tenderloin cupim. Pork chop dolore pork anim boudin nulla ut pastrami drumstick occaecat turducken bacon strip steak. Capicola prosciutto aliquip swine esse, sunt ut mollit corned beef exercitation nostrud chicken veniam deserunt do. Pork loin nisi cow, ex landjaeger kielbasa tail est hamburger ball tip labore pork turducken.";
        $pc->save();
    }
}
