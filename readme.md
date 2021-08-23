# Práticar testes unitários, relembrar conceitos básicos de orientação a objetos e aprender mais sobre design patterns.
    
    - Os códigos aqui escritos estão documentados em testes unitários.

    - E sim, esse arquivo vai quebrar o princípio da responsabilidade única, pois vai ficar enorme.


# Resumo sobre composição, agregação e associação

    - Composição: é basicamente uma instância dentro de uma classe.

    - Agregação: quando uma classe depende de "1 ou N" classes de mesmo tipo para executar determinada ação, geralmente passado por injeção de dependência.

    - Associação: é como a agregação, mas em vez de usar "1 ou N" classes de mesmo tipo, a associação utiliza apenas uma classe para executar determinada ação.


# Resumo sobre S.O.L.I.D

    - Princípio da responsabilidade única: um objeto deve ter uma e somente uma responsabilidade;

    - Princípio aberto/fechado: um objeto deve ser aberto para extensão e fechado para alteração. Caso um outro objeto SEJA do mesmo tipo e precise de 
    determinado comportamento, há a opção de se estender. Quando se fala de "fechado para alteração", quer dizer que comportamentos e assinaturas não podem
    ser modificados, visto que esse objeto já pode ter sido instanciado em diversos pontos da aplicação, qualquer modificação pode resultar multiplos erros.

    - Princípio de substituição de Liskov: se resume em uma classe base poder ser substituída pela classe pela classe derivada e vice-versa.

    - Princípio de segregação de interface: um mantra que representa bem esse princípio é: "Clientes não devem ser forçados a depender de interfaces que eles não irão usar", pensando nisso podemos concluir que em vez de fazer grandes interfaces, podemos aplicar o princípio da respons. única aqui também criando interfaces somente com as assinaturas necessárias para evitar uma complexidade posterior.

    - Princípio da inversão de dependência: o princípio da inversão de dependência refere-se à dissociação de módulos de software. Dessa forma, em vez de módulos de alto nível dependendo de módulos de baixo nível, ambos dependerão de abstrações.


# Conceitos de design patterns tirados de: design patterns com java - projeto orientado a objetos guiado por padrões | Casa do código

    - Comportamentais:

        - Template method: se resume em uma classe abstrata que será usada como esqueleto para uma classe concreta, nessa classe abstrata terá
        seus métodos projegidos concretos quando for algo genérico, métodos abstratos quando for um conceito e um método gancho público final 
        (para não poder ser sobreescrito) que usará seus métodos protegidos como auxiliares. Obs: os métodos protegidos da classe abstrata pode ser 
        sobreescrito na classe concreta (subclasse).

        # Exemplo(s) de template method utilizado(s): 
            - Gerador de arquivos onde as classes concretas Text e Xml usam o mesmo esqueleto (AbstractFileGenerator) para executar conceitos em comum, mas que podem conter implementações diferentes.

            - Ordem de pagamento: onde as classes concretas DiscountOrder e IncreaseOrder usam o mesmo esqueleto (AbstractOrder) para executar conceitos em comum mas que podem conter implementações diferentes.

        - State: se resume em um padrão de projeto usado quando o comportamento de um objeto muda, dependendo do seu estado.

        # Exemplo(s) state utilizado(s)
            - Editor de texto: uma classe TextEditor utiliza objetos com estados de texto (texto em caixa alta ou caixa baixa). Esses objetos estados implementam uma interface WriteState para definir o comportamento (estado) que será executado pela classe TextEditor.

    - Criacionais:

        - Factory method: assim como no template method, o factory method utiliza uma classe abstrata como esqueleto com os métodos em comum que as subclasses de determinado tipo terão de usar/implementar e utiliza também um hook method como método abstrato, cujo o objeto que será "fabricado" será escolhido pela classe concreta. Resumindo: Ele fornece uma maneira de delegar a lógica de instanciação a classe filho.


    - Estruturais:
    
        - Bridge: ...

        - Adapter: digamos que exista uma classe ProcessPayment que tem como dependência uma classe PaymentMethod pra obter os métodos que irão setar o valor de pagamento, mas a classe que contém esses (PayPal ou PagSeguro) métodos não implementa a interface PaymentMethod, nesse caso encapsulamos a classe 
        (PayPal ou PagSeguro) com uma nova classe e adicionamos a interface necessária (PaymentMethod) pra executar a ação.


# Nuances importantes sobre orientação a objetos tiradas do livro

    - Refatorando na direção da herança muitas vezes, os requisitos que direcionam o desenvolvimento para o uso da herança não surgem todos ao mesmo tempo. Outras vezes, simplesmente não se visualiza no momento que se está programando que aquele padrão pode ajudar na solução. Nesses casos, o padrão pode ser alcançado a partir de refatorações. A ideia é conseguir, a partir de pequenos passos, ir modificando aos poucos a estrutura da solução, sem modificar o seu comportamento. Vale ressaltar que é extremamente recomendado que a refatoração seja apoiada por uma suíte de testes automatizados, que devem ser executados a cada passo da refatoração para verificar se o comportamento foi mantido.

    
