<?php

namespace App;

use PDO;

// Classe responsável por fazer a gestão da conexão com o banco.
class Database {
    static $con;

    static public function getConnection(): PDO {
        if (isset(self::$con)) return self::$con;

        self::$con = new PDO('sqlite:progweb-db.sqlite');
        self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$con;
    }

    static public function createSchema(): void {
        $con = self::getConnection();

        $con->exec("
            CREATE TABLE IF NOT EXISTS Usuarios (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome  TEXT,
                email TEXT UNIQUE,
                senha TEXT
            )
        ");
        
        $con->exec("
            INSERT OR REPLACE INTO Usuarios (nome, email, senha) VALUES
            ('Carlos', 'carlos@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Lucas', 'lucas@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Pedro', 'pedro@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Gabriel', 'gabriel@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Christian', 'christian@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Fernanda', 'fernanda@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Geovana', 'geovana@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Beatriz', 'beatriz@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Isabela', 'isabela@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92'),
            ('Juriscreuda', 'juriscreuda@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92')
        ");
        
        $con->exec("
            CREATE TABLE IF NOT EXISTS Produtos (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                nome  TEXT UNIQUE,
                autor TEXT,
                imagem TEXT,
                genero TEXT,
                descricao TEXT,
                preco FLOAT
            )
        ");
        
        $con->exec("
            INSERT OR REPLACE INTO Produtos (nome, autor, genero, descricao, preco,imagem) VALUES

            ('Livro do desassossego', 'João Pessoa', 'Clássico', 'Os fragmentos que compõem esta complexa obra representam a inquietude, os sentimentos, as dúvidas e o amplo conhecimento de mundo daquele que segurava a caneta para escrever tão profundas palavras e ao fim assinar sob o heterônimo de Bernardo Soares. Escrita em forma de diário, Livro do Desassossego é a obra de Fernando Pessoa que mais se assemelha a um romance, revelando os mais íntimos pensamentos e impressões do autor.', 10, 'https://www.amazon.com.br/Livro-do-desassossego-Fernando-Pessoa/dp/8535919430/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=3FWF946P8CWOH&keywords=livro+do+desassossego&qid=1638415469&sprefix=livro+do+de%2Caps%2C341&sr=8-1'),

            ('Drácula', 'Bram Stoker', 'Clássico', 'Drácula é um clássico da literatura de terror e apresenta por meio de cartas, diários e notícias os ataques do vampiro Conde Drácula a moradores de Londres e da Transilvânia. O romance epistolar marcou o gênero e, mesmo não sendo a primeira obra a retratar esse mito literário, definiu o que conhecemos hoje como vampiro, influenciando a literatura, cinema e teatro.', 16,'https://www.amazon.com.br/Dracula-Bram-Stoker/dp/1681160641/ref=sr_1_3?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=dracula&qid=1638415431&sr=8-3&ufe=app_do%3Aamzn1.fos.6a09f7ec-d911-4889-ad70-de8dd83c8a74'),
           
            ('15 Incríveis Truques Mentais', 'Danilo H. Gomes', 'Científico', '15 INCRÍVEIS TRUQUES MENTAIS ensina de forma simples e sem devaneios 15 incríveis truques mentais para facilitar sua vida e te auxiliar em seu cotidiano. Com explicações resumidas e de fácil entendimento, usufrua de várias técnicas reconhecidas pela psicologia e comprovadas pela PNL (Programação Neurolinguística).', 20, 'https://m.media-amazon.com/images/I/41HJ9C6qlfL._SY346_.jpg'),
            
            ('O Diário de Anne Frank', 'Anne Frank', 'Clássico', 'É a história real de uma garota judia de 13 anos que ficou escondida com a família durante a ocupação nazista da Holanda. O nome dela era Annelies Marie Frank, nasceu em 12 de junho de 1929 em Frankfurt, na Alemanha, e morreu em um campo de concentração, pouco antes do fim da Segunda Guerra Mundial, em 1945. Foi escondida, no último andar de um prédio, que Anne Frank escreveu durante mais de 2 anos em dos registros mais detalhados do dia a dia daquela fase em que os nazistas, liderados por Hitler, espalharam o horror entre seus perseguidos.', 13,'https://images-na.ssl-images-amazon.com/images/I/41+PZUZS7LL._SY344_BO1,204,203,200_.jpg'),
            
            ('Dom Casmurro', 'Machado de Assis', 'Clássico', 'Capitu, Bentinho e Escobar formam o triângulo amo­roso mais conhecido da literatura nacional – com a condição de que acreditemos no narrador de um dos mais polêmicos romances brasileiros. Quem conta a his­tória de Dom Cas­murro é o próprio Bento Santiago, agora um senhor maduro que relembra a infância passada no bairro carioca de Mata­cavalos, quando conheceu o amor de sua vida: Capitu. Com a ironia que lhe é característica, Machado revolucionou o romance de amor, deixando para os leitores um dos grandes enigmas da nossa cultura: afinal, Capitu traiu ou não traiu?', 7,'https://www.amazon.com.br/Dom-Casmurro-Machado-Assis/dp/859431860X/ref=sr_1_3?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&keywords=dom+casmurro&qid=1638415324&sr=8-3'),
            
            ('O amanhã não está à venda', 'Ailton Krenak', 'Científico', 'Há vários séculos que os povos indígenas do Brasil enfrentam bravamente ameaças que podem levá-los à aniquilação total e, diante de condições extremamente adversas, reinventam seu cotidiano e suas comunidades. Quando a pandemia da Covid-19 obriga o mundo a reconsiderar seu estilo de vida, o pensamento de Ailton Krenak emerge com lucidez e pertinência ainda mais impactantes.', 10,'https://m.media-amazon.com/images/I/51klxs6WIML._SY346_.jpg'),
            
            ('O apanhador de acalantos', 'Beatriz Pereira Rodrigues', 'Infantil', 'Livro baseado em uma das histórias vencedoras da Olimpíada da Língua Portuguesa de 2019 na categoria Crônica. A história fala sobre a percepção de uma menina sobre solidão e empatia.', 15,'https://www.amazon.com.br/apanhador-acalantos-Leia-Para-Crian%C3%A7a-ebook/dp/B08KWNT6T3/ref=sr_1_1?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2NHX5ZG2JQ4KB&keywords=o+apanhador+de+acalantos&qid=1638415603&sprefix=o+apanhadir+de+aca%2Caps%2C336&sr=8-1'),
            
            ('O Cortiço', 'Aluísio Azevedo', 'Clássico', 'Rio de Janeiro, século XIX. Se esse cenário lhe traz à mente reis, princesas e bondes, prepare-se para mergulhar em um retrato diferente da sociedade brasileira naquela época, composto de inúmeros personagens que, juntos, representam não apenas as mazelas sociais, mas também mostram até onde a vileza humana é capaz de chegar.', 5,'https://m.media-amazon.com/images/I/41r-Z0sbizL._SY346_.jpg'),
            
            ('O Pai', 'Machado de Assis', 'Clássico', 'Um conto onde temos a trajetória da vida de um pai que faz tudo por sua filha, após uma desilusão amorosa. Esse pai decide aposentar-se mais cedo para que saíssem da cidade e vivessem de forma mais simples e honrada longe de fuxicos do que teria acontecido com sua filha.', 15,'https://m.media-amazon.com/images/I/41-3XpfG2IL._SY346_.jpg'),
            
            ('O reino da Rosa Negra', 'Isabela Zinn', 'Fantasia', 'Destinada a ser a próxima rainha do prestigioso reino de Livingstone, ela enfrenta a reclusão do castelo e uma árdua rotina de treinamento que a tornará impecável para o futuro cargo. Ele, por sua vez, foi escondido do mundo e passa todos os dias, desde o nascimento, como servo da irmã.', 29,'https://images-na.ssl-images-amazon.com/images/I/51jZcWh5LeL._SY344_BO1,204,203,200_QL70_ML2_.jpg'),
            
            ('Os miseráveis', 'Victor Hugo', 'Romance', 'Este romance se desdobra em muitos: é uma história de injustiça e heroísmo, mas também uma ode ao amor e também um panorama político e social da Paris do século XIX. Pela história de Jean Valjean, que ficou anos preso por roubar um pão para alimentar sua família e que sai da prisão determinado a deixar para trás seu passado criminoso, conhecemos a fundo a capital francesa e seu povo, o verdadeiro protagonista.', 27,'https://m.media-amazon.com/images/I/51MuccKtzYL._SY346_.jpg'),
            
            ('Uma dobra no tempo', 'Madeleine L Engle', 'Fantasia', 'Após uma noite de forte tempestade, uma visita estranha chega à casa da família Murry e convoca Meg, seu irmão Charles Wallace e o amigo deles, Calvin O Keefe para uma aventura muito perigosa e extraordinária – uma viagem que ameaçará suas vidas e o nosso universo.', 30,'https://images-na.ssl-images-amazon.com/images/I/41ir2veV85L._SY344_BO1,204,203,200_QL70_ML2_.jpg'),
            
            ('As viagens de Gulliver', 'Jonathan Swift', 'Fantasia', 'O jovem Gulliver é um médico cirurgião e aprendiz de navegação sedento de aventuras. Agora é o único sobrevivente de um naufrágio e foi parar em uma curiosa terra, onde conhece lugares e pessoas bastante diferentes. Em um lugar Gulliver é um gigante, noutro uma miniatura, quase um brinquedo.', 24,'https://www.amazon.com.br/Viagens-Gulliver-Jonathan-Swift/dp/8563560123/ref=sr_1_2?__mk_pt_BR=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=3C0M3S53GDV0S&keywords=as+viagens+de+gulliver&qid=1638416148&sprefix=as+viagens+%2Caps%2C350&sr=8-2'
            )
        ");
        
        $con->exec("
            CREATE TABLE IF NOT EXISTS Carrinho (
                id_usuario INTEGER,
                id_produto INTEGER,

                FOREIGN KEY (id_usuario) REFERENCES Usuario(id),
                FOREIGN KEY (id_produto) REFERENCES Produto(id)
            )
        ");
    }
}
?>