Grande Marcel!

Muito obrigado pelo desafio. Vou ser sincero: todos as respostas foram pegas da internet e demorei umas 2h para consolidar tudo, estudar as soluções e escrever este README pois o prazo é curto e algumas das questões fogem bastante do mundo real.

Inclusive [tem um debate](https://www.reddit.com/r/PHP/comments/2394p2/aree_these_php_challenges_too_difficult_for_a/) interessante nesta thread do reddit sobre este teste e o uso dele em entrevistas de emprego.

Agora vamos bater um papo =)

Sobre SOLID:
--------------------------

Pouco utilizei interfaces nos projetos no qual me envolvi. Já as injeções de dependências e a quebra de funcionalidades para que estas possam ser reaproveitadas, é bastante utilizado em repository pattern.
O famoso "não mexe ai pq tá funcionando" é o jeito bonito de falar sobre o princípio aberto/fechado. Isso é tão usado que colocaram até um nome bonito para isso. Hehe

Sobre TDD:
--------------------------

Como expliquei por vídeo, infelizmente, atualmente não tenho utilizado testes automatizados como gostaria mas conheço o conceito. Sempre testo manualmente meus códigos ao ponto de errar a maior quantidade de vezes possíveis mesmo que já tenha adquirido a resposta correta.
Além do mais, com Laravel, temos [uma parte da documentação](https://laravel.com/docs/5.6/testing) só para isso! Creio que seja simples a implementação caso necessário dentro do projeto.

![](https://scontent-gig2-1.xx.fbcdn.net/v/t1.0-9/35325189_1719953728040850_2317012896300662784_n.jpg?_nc_cat=0&oh=0b553c3388a39a710370d8c58bdc0774&oe=5B7A3236)

Sobre Padrões de Projetos:
--------------------------

Só apanhei um pouco com singleton e factory na época em que migrei um sistema PHP que utilizava o mysql_li para PDO. Foi ai que precisei implementar o padrão do zero e sem framework!!!
Tirando isso, a maioria dos frameworks já vem com pacotes que auxiliam demais o uso e implementação de patterns.
Para Laravel, estou acostumado à usar [este pacote](https://packagist.org/packages/prettus/l5-repository).
Para Node, um boilerplate que gosto bastante de usar [é este](https://github.com/danielfsousa/express-rest-es2017-boilerplate).
