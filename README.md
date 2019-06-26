# Monitoramento dos Estudantes


Este sistema tem como propósito servir como uma plataforma para o desenvolvimento de pesquisas inteligentes sobre dados acadêmicos dos alunos do IFPE. A ideia é permitir um acompanhamento, inteligente e através de análise de dados, da evolução acadêmica dos alunos desde o ingresso no IFPE e que prossegue continuamente com a avaliação sua atuação profissional após a finalização do vínculo com a instituição.  Este sistema permitirá gestores entender como a instituição está atuando e assim redirecionar esforços para aumentar o grau de impacto da instituição na sociedade. Por exemplo, situações específicas de evasão, retenção e baixo engajamento no mercado do trabalho poderão ser mais bem estudados com o ferramental da inteligência de dados.
Para alcançar este propósito o sistema tem uma parte que atua para captar os dados de várias fontes, tais como, aplicação de questionários online e importação de bancos de dados dos sistemas de informação utilizados pelo IFPE (Q-Acadêmico). Para a construção das buscas haverá duas alternativas: (i) uma interface gráfica intuitiva que permita a usuários criar buscas e gerar relatórios, nesse caso tudo poderá ser feito sem a necessidade e de conhecimentos em programação, ou seja, qualquer gestor ou técnico administrativo pode gerar relatórios; (ii) ou através de um mecanismo chamado API (Interface de Programação de Aplicações) que permite o usuário com conhecimento em programação desenvolver sistemas avançados de análise de dados através técnicas específicas de Inteligência Artificial. 


# O que o sistema deseja? 
 
Coleta de Dados

Os dados são a matéria prima para a construção das pesquisas, a coleta ocorrerá por três meios:

Aplicação de questionários: questionários serão aplicados quando o aluno ingressa na instituição, no último semestre de curso e periodicamente após o fim do vínculo da instituição.

Importação de dados do questionário socioeconômico: ao prestar vestibular o aluno preenche um questionário socioeconômico, estes dados serão importados para alimentar a base de dados. 

Importação de dados do sistema acadêmico: dados sobre o histórico acadêmico do aluno serão importados do Q-Acadêmico.

# Mais informações:

Com os dados os professores conseguem ter informações sobre os alunos e egressos.

Esse sistema é diferenciado pois já é apto para o que é necessário.

Os professores também poderá criar formulários com as perguntas que ele mais deseja saber sobre os alunos e egressos, tanto no formulário de saída, quanto mo de entrada.


# Instalação 

Passo 1: git clone https://github.com/libna/monitoramento-estudantil.git (entrar na pasta do projeto para continuar as outras etapas) Passo 2: composer install Passo 3: cp .env.example .env (antes de abrir o arquivo .env criar uma base de dados, após criar abrir o arquivo e editar o nome da base de dados que foi criada, o nome do usuário e senha cadastrado no mysql) Passo 4: php artisan key:generate Passo 5: php artisan migrate --seed Passo 6: php artisan serve (iniciar o servidor) Passo 7: Agora no seu navegador colocar na URL http://127.0.0.1:8000 ou localhost:8000 , pronto agora pode se cadastrar no sistema e ter acesso a suas funcionalidades.

# Observações

No arquivo Makefile tem um código que quando rodado verifica se tem todas as ferramentas instaladas,
se você estiver com tudo instalado poderá digitar o comando "make conf", e assim irá baixar/instalar
todos os requesitos para navegar no site, ao fazer isso você dece dar um "cd student-monitoring" e 
assim digitar o comando "php artisan serve" e navegar a vontade no seu navegador para desfrutar todas
as funcionalidades deste sistema. 






