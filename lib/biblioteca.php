<?php

class Anuncio
{
    private static $valor_array;
    
    function __construct()
    {
        
        self::$valor_array = array(
            1 => 'https://ello.co/enter',
            2 => 'https://myopportunity.com/en/signin',
            3 => 'https://vestibular.unoparead.com.br/inscricao/',
            4 => 'https://diasporabr.com.br/users/sign_in',
            5 => 'https://tips4java.wordpress.com/2013/03/03/smart-scrolling/',
            6 => 'https://www.freelancermap.com/registration',
            7 => 'https://web.whatsapp.com/',
            8 => 'http://www.cvengenharia.com.br/',
            9 => 'https://www.vagas.com.br/',
            10 => 'https://trampos.co/',
            11 => 'https://www.globo.com/',
            12 => 'https://www.r7.com/',
            13 => 'https://www.sbt.com.br/home/',
            14 => 'http://www.ufop.br/',
            15 => 'http://www.ufop.br/',
            16 => 'https://www.altillo.com/pt/universidades/brasil/estado/minasgerais.asp',
            17 => 'https://www.unip.br/Ead/Ensino/Cursos_Graduacao_Pos_Graduacao',
            18 => 'https://simulado.infoenem.com.br/',
            19 => 'https://fael.edu.br/cursos/graduacao',
            20 => 'https://www.faculdadeunica.com.br/',
            21 => 'http://www.igti.com.br/cursos/mba-em-projeto-de-aplicacoes-java/',
            22 => 'https://www.esab.edu.br/pos-graduacao-ead/mba-profissional/',
            23 => 'https://www.portalpos.com.br/',
            24 => 'https://claretiano.edu.br/',
            25 => 'https://www.uninter.com',
            26 => 'https://www.uninter.com/graduacao-ead/curso-relacoes-internacionais/',
            27 => 'http://www.cursosonlinesp.com.br/',
            28 => 'https://www.faculdadeunica.com.br/ead/graduacao/',
            29 => 'http://univirtus.uninter.com/ava/web/',
            30 => 'https://universidade.solides.com.br/course/people-analytics/#',
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
    
    public static function retornarArquivo() {
        return rand(1, 30);
    }
}

class AreaInteresse
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'ADMINISTRAÇÃO COMERCIAL/VENDAS',
            2 => 'ADMINISTRAÇÃO DE EMPRESAS',
            3 => 'ADMINISTRAÇÃO PÚBLICA',
            4 => 'ADVOCACIA/JURÁDICA',
            5 => 'AGRONOMIA',
            6 => 'ARQUITETURA/URBANISMO',
            7 => 'ARQUIVOLOGIA',
            8 => 'ARTES CÊNICAS',
            9 => 'ARTES GRÁFICAS',
            10 => 'ARTES PLÁSTICAS',
            11 => 'ATENDIMENTO AO CLIENTE - BARES E RESTAURANTES',
            12 => 'ATENDIMENTO AO CLIENTE - TELEFONISTAS/RECEPCIONISTAS',
            13 => 'ATENDIMENTO AO CLIENTE - TELEMARKETING/CALL CENTER',
            14 => 'ATENDIMENTO AO CLIENTE',
            15 => 'AUDITORIA',
            16 => 'BANCOS',
            17 => 'BIBLIOTECONOMIA',
            18 => 'BIOLOGIA/CIÊNCIAS BIOLÓGICAS',
            19 => 'BIOMEDICINA',
            20 => 'CIÊNCIAS SOCIAIS',
            21 => 'CINEMA',
            22 => 'COMÉRCIO',
            23 => 'COMÉRCIO EXTERIOR',
            24 => 'COMPRAS',
            25 => 'COMUNICAÇÃO',
            26 => 'CONSTRUÇÃO CIVIL',
            27 => 'CONTABILIDADE',
            28 => 'CONTROLADORIA',
            29 => 'CULINÁRIA/GASTRONOMIA',
            30 => 'DESENHO INDUSTRIAL',
            31 => 'DESIGN DE INTERIORES',
            32 => 'DESIGN GRÁFICO',
            33 => 'ECOLOGIA/MEIO AMBIENTE',
            34 => 'ECONOMIA',
            35 => 'ENFERMAGEM',
            36 => 'ENGENHARIA DE ALIMENTOS',
            37 => 'ENGENHARIA CIVIL',
            38 => 'ENGENHARIA ELETRÔNICA',
            39 => 'ENGENHARIA ELÉTRICA',
            40 => 'ENGENHARIA MECÂNICA',
            41 => 'ENGENHARIA METALÚRGICA E DE MATERIAIS',
            42 => 'ENGENHARIA DE MINAS',
            43 => 'ENGENHARIA DE PRODUÇÃO',
            44 => 'ENGENHARIA QUÍMICA',
            45 => 'ENGENHARIA - OUTRAS',
            46 => 'ENSINO SUPERIOR E PESQUISA',
            47 => 'ENSINO - OUTROS',
            48 => 'ENTRETERIMENTO',
            49 => 'ESPORTES',
            50 => 'ESTÉTICA',
            51 => 'FARMÁCIA',
            52 => 'FILOSOFIA',
            53 => 'FINANÇAS',
            54 => 'FISCAL',
            55 => 'FÍSICA',
            56 => 'FISIOTERAPIA',
            57 => 'FONOAUDIOLOGIA',
            58 => 'GEOGRAFIA',
            59 => 'GEOLOGIA',
            60 => 'GESTÃO EMPRESARIAL',
            61 => 'HISTÓRIA',
            62 => 'HOTELARIA',
            63 => 'INDÚSTRIA',
            64 => 'INFORMÁTICA/T.I.',
            65 => 'INTERNET',
            66 => 'JORNALISMO',
            67 => 'LETRAS',
            68 => 'LOGÍSTICA',
            69 => 'MANUTENÇÃO INDUSTRIAL',
            70 => 'MANUTENÇÃO PREDIAL',
            71 => 'MATEMÁTICA/ESTATÍSTICA',
            72 => 'MEDICINA/HOSPITALAR',
            73 => 'METEOROLOGIA',
            74 => 'MINERAÇÃO',
            75 => 'MODA',
            76 => 'MUSEOLOGIA',
            77 => 'MÚSICA',
            78 => 'NUTRIÇÃO',
            79 => 'OCEANOGRAFIA',
            80 => 'ODONTOLOGIA',
            81 => 'ORGANIZAÇÃO DE EVENTOS/PRODUÇÃO CULTURAL',
            82 => 'ORGANIZAÇÃO E MÉTODOS',
            83 => 'PEDAGOGIA',
            84 => 'PESQUISA DE MERCADO',
            85 => 'PETROLÍFERA',
            86 => 'PRODUÇÃO/FABRICAÇÃO',
            87 => 'PROFESSOR',
            88 => 'PROPAGANDA/MARKETING',
            89 => 'PSICOLOGIA',
            90 => 'QUALIDADE',
            91 => 'QUÍMICA',
            92 => 'RADIALISMO E TELEVISÃO',
            93 => 'RECURSOS HUMANOS',
            94 => 'RELAÇÕES INTERNACIONAIS',
            95 => 'RELAÇÕES PÚBLICAS',
            96 => 'SECRETARIADO',
            97 => 'SEGURANÇA E SAÚDE NO TRABALHO',
            98 => 'SEGURANÇA PATRIMONIAL',
            99 => 'SEGUROS',
            100 => 'SERVIÇO SOCIAL',
            101 => 'SERVIÇOS',
            102 => 'SERVIÇOS ADMINISTRATIVOS',
            103 => 'SERVIÇOS DOMÉSTICOS',
            104 => 'SERVIÇOS ESPECIALIZADOS - AÇOUGUE',
            105 => 'SERVIÇOS ESPECIALIZADOS - PADARIA/CONFEITARIA',
            106 => 'SERVIÇOS ESPECIALIZADOS - PEIXARIA',
            107 => 'SERVIÇOS GERAIS',
            108 => 'SERVIÇOS TÉCNICOS - ELÉTRICOS',
            109 => 'SERVIÇOS TÉCNICOS - ELETRÔNICOS',
            110 => 'SERVIÇOS TÉCNICOS - MECÂNICOS',
            111 => 'SERVIÇOS TÉCNICOS - OUTROS',
            112 => 'SUPRIMENTOS',
            113 => 'TELECOMUNICAÇÕES',
            114 => 'TERAPIA OCUPACIONAL',
            115 => 'TERCEIRO SETOR/RESPONSABILIDADE SOCIAL',
            116 => 'TRADUÇÃO/INTERPRETAÇÃO',
            117 => 'TRANSPORTE AÉREO',
            118 => 'TRANSPORTE MARÍTIMO',
            119 => 'TRANSPORTE TERRESTRE',
            120 => 'TRIBUTÁRIA',
            121 => 'TURISMO',
            122 => 'VENDAS',
            123 => 'VENDAS - VAREJO',
            124 => 'VENDAS - TÉCNICAS',
            125 => 'VETERINÁRIA',
            126 => 'WEB DESIGN',
            127 => 'ZOOLOGIA',
            128 => 'ZOOTECNIA'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Cnh
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'NÃO POSSUI',
            2 => 'A',
            3 => 'B',
            4 => 'C',
            5 => 'D',
            6 => 'E'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Constante
{
    
    const AUTOFOCUS = 'autofocus';
    
    const AUTOFOCUS_VALUE = 'autofocus';
    
    const CLASSE = 'class';
    
    const CLASSE_ENTRADA_VALUE = 'form-control entrada';
    
    const CLASSE_BTN_VALUE = 'btn btn-default';
    
    const COLS = 'cols';
    
    const DROPDONW_ITEM = 'dropdown-item';
    
    const FIELD = 'field';
    
    const HIDDEN = 'hidden';
    
    const ID = 'id';
    
    const INPUT = 'input';
    
    const LABEL = 'label';
    
    const MAXLENGTH = 'maxlength';
    
    const MIN = 'min';
    
    const MAX = 'max';
    
    const NAME = 'name';
    
    const NUMBER = 'number';
    
    const OPTION = 'option';
    
    const PASSWORD = 'password';
    
    const PLACEHOLDER = 'placeholder';
    
    const REQUIRED = 'required';
    
    const ROWS = 'rows';
    
    const STYLE = 'style';
    
    const STYLE_WIDTH = 'width: 600px;';
    
    const RULES = 'rules';
    
    const SUBMIT = 'submit';
    
    const TYPE = 'type';
    
    const TEXT = 'text';
    
    const TEXTAREA = 'textarea';
    
    const TRUE = 'true';
    
    const VALUE = 'value';
    
    const ANUNCIO_VIEW = 'AnuncioView';
    
    const AREA_INTERESSE = 'area_interesse';
    
    const ANO_CONCLUSAO = 'ano_conclusao';
    
    const ANO_INICIO = 'ano_inicio';
    
    const BAIRRO = 'bairro';
    
    const BENEFICIOS = 'beneficios';
    
    const CABECALHO_VIEW = 'CabecalhoView';
    
    const CARGO = 'cargo';
    
    const CADASTRO_VAGA_LISTA_VIEW = 'CandidatoVagaListaView';
    
    const CARGA_HORARIA = 'carga_horaria';
    
    const CERTIFICADO_LISTA_VIEW = 'CertificadoListaView';
    
    const CERTIFICADO_VIEW = 'CertificadoView';
    
    const CERTIFICADO = 'certificado';
    
    const CELULAR_CODIGO_AREA = 'celular_codigo_area';
    
    const CELULAR_NUMERO = 'celular_numero';
    
    const CEP = 'cep';
    
    const CIDADE = 'cidade';
    
    const CONFIRMAR_SENHA = 'confirmarSenha';
    
    const COMPLEMENTO = 'complemento';
    
    const CONHECIMENTO = 'conhecimento';
    
    const CONTRATO = 'contrato';
    
    const CNH = 'cnh';
    
    const CURSO = 'curso';
    
    const CURSO_LISTA_VIEW = 'CursoListaView';
    
    const CURSO_VIEW = 'CursoView';
    
    const DATA_PUBLICACAO = 'data_publicacao';
    
    const DATA_NASCIMENTO = 'data_nascimento';
    
    const DATA_ADMISSAO = 'data_admissao';
    
    const DATA_CRIACAO = 'data_criacao';
    
    const DATA_ULTIMO_ACESSO = 'data_ultimo_acesso';
    
    const DATA_SAIDA = 'data_saida';
    
    const DATA_FORMAT = 'dd/mm/aaaa';
    
    const DISPONIVEL_VIAGENS = 'disponivel_viagens';
    
    const EMPREGADO_ATUALMENTE = 'empregado_atualmente';
    
    const ESCOLARIDADE = 'escolaridade';
    
    const ESTADO = 'estado';
    
    const ESTADO_CIVIL = 'estado_civil';
    
    const EXPERIENCIA_PROFISSIONAL = 'experiencia_profissional';
    
    const EXPERIENCIA_PROFISSIONAL_VIEW = 'ExperienciaProfissionalView';
    
    const ERRO_VIEW = 'ErroView';
    
    const E_MAIL = 'email';
    
    const FONE_RESIDENCIAL_CODIGO_AREA = 'fone_residencial_codigo_area';
    
    const FONE_RESIDENCIAL_NUMERO = 'fone_residencial_numero';
    
    const FUNCOES = 'funcoes';
    
    const HABILIDADE_VIEW = 'HabilidadeView';
    
    const IDADE = 'idade';
    
    const IDIOMA = 'idioma';
    
    const IDIOMA_VIEW = 'IdiomaView';
    
    const IDIOMA_LISTA_VIEW = 'IdiomaListaView';
    
    const INSTITUICAO = 'instituicao';
    
    const LOGIN_EMPRESA_VIEW = 'LoginEmpresaView';
    
    const LOGIN_PESSOA_VIEW = 'LoginPessoaView';
    
    const LOGRADOURO = 'logradouro';
    
    const MODALIDADE = 'modalidade';
    
    const MENSAGEM = 'mensagem';
    
    const MENU_VIEW = 'MenuView';
    
    const MSG_DADOS_GRAVADOS_SUCESSO = 'Dados gravados com sucesso !';
    
    const MSG_DADOS_EXCLUIDO_SUCESSO = 'Registro excluído com sucesso !';
    
    const MSG_DADOS_NAO_ENCONTRADO = 'Registro não encontrado !';
    
    const MSG_ERRO = 'Ocorreu um erro! Por favor, tente novamente.';
    
    const NACIONALIDADE = 'nacionalidade';
    
    const NIVEL = 'nivel';
    
    const NIVEL_HIERARQUICO = 'nivel_hierarquico';
    
    const NIVEL_CONHECIMENTO = 'nivel_conhecimento';
    
    const NOME = 'nome';
    
    const OBJETIVO_PROFISSIONAL = 'objetivo_profissional';
    
    const OBJETIVO_PROFISSIONAL_VIEW = 'ObjetivoProfissionalView';
    
    const PAIS = 'pais';
    
    const POSSUI_FILHOS = 'possui_filhos';
    
    const POSSUI_DEFICIENCIA = 'possui_deficiencia';
    
    const POSSUI_CARRO = 'possui_carro';
    
    const POSSUI_MOTO = 'possui_moto';
    
    const PRETENSAO_SALARIAL = 'pretensao_salarial';
    
    const PUBLICACAO_VAGA = 'publicacao_vaga';
    
    const RAZAO_SOCIAL = 'razao_social';
    
    const SEXO = 'sexo';
    
    const SALARIO = 'salario';
    
    const SITUACAO = 'situacao';
    
    const SENHA = 'senha';
    
    const SUCESSO_VIEW = 'SucessoView';
    
    const TRABALHA_OUTRAS_CIDADES = 'trabalha_outras_cidades';
    
    const TRABALHA_EXTERIOR = 'trabalha_exterior';
    
    const USUARIO = 'usuario';
    
    const EMPRESA = 'empresa';
    
    const ULTIMO_SALARIO = 'ultimo_salario';
    
    const VAGAS = 'vagas';
    
    const VAGAS_VIEW = 'VagasView';
    
    const VAGAS_PESQUISA_VIEW = 'VagasPesquisaView';
    
    const VAGAS_LISTA_VIEW = 'VagasListaView';
    
    const VOLTAR = 'voltar';
}

class Contrato
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'EFETIVO (CLT)',
            2 => 'ESTÁGIO',
            3 => 'TEMPORÁRIO',
            4 => 'AUTÔNOMO',
            5 => 'PRESTADOR DE SERVIÇOS (PJ)',
            6 => 'TRAINEE',
            7 => 'COOPERADO',
            8 => 'OUTROS'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Cpf
{
    
    public function validarCPF($cpf)
    {
        // determina um valor inicial para o digito $d1 e $d2
        // pra manter o respeito ;)
        $d1 = 0;
        $d2 = 0;
        // remove tudo que não seja número
        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        // lista de cpf inválidos que serão ignorados
        $ignore_list = array(
            '00000000000',
            '01234567890',
            '11111111111',
            '22222222222',
            '33333333333',
            '44444444444',
            '55555555555',
            '66666666666',
            '77777777777',
            '88888888888',
            '99999999999'
        );
        // se o tamanho da string for dirente de 11 ou estiver
        // na lista de cpf ignorados já retorna false
        if (strlen($cpf) != 11 || in_array($cpf, $ignore_list)) {
            return false;
        } else {
            // inicia o processo para achar o primeiro
            // número verificador usando os primeiros 9 dígitos
            for ($i = 0; $i < 9; $i ++) {
                // inicialmente $d1 vale zero e é somando.
                // O loop passa por todos os 9 dígitos iniciais
                $d1 += $cpf[$i] * (10 - $i);
            }
            // acha o resto da divisão da soma acima por 11
            $r1 = $d1 % 11;
            // se $r1 maior que 1 retorna 11 menos $r1 se não
            // retona o valor zero para $d1
            $d1 = ($r1 > 1) ? (11 - $r1) : 0;
            // inicia o processo para achar o segundo
            // número verificador usando os primeiros 9 dígitos
            for ($i = 0; $i < 9; $i ++) {
                // inicialmente $d2 vale zero e é somando.
                // O loop passa por todos os 9 dígitos iniciais
                $d2 += $cpf[$i] * (11 - $i);
            }
            // $r2 será o resto da soma do cpf mais $d1 vezes 2
            // dividido por 11
            $r2 = ($d2 + ($d1 * 2)) % 11;
            // se $r2 mair que 1 retorna 11 menos $r2 se não
            // retorna o valor zeroa para $d2
            $d2 = ($r2 > 1) ? (11 - $r2) : 0;
            // retona true se os dois últimos dígitos do cpf
            // forem igual a concatenação de $d1 e $d2 e se não
            // deve retornar false.
            return (substr($cpf, - 2) == $d1 . $d2) ? true : false;
        }
    }
}

class Deficiencia
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'NÃO',
            2 => 'MOTORA',
            3 => 'FÍSICA',
            4 => 'MENTAL',
            5 => 'AUDITIVA',
            6 => 'VISUAL',
            7 => 'FALA',
            8 => 'MÚLTIPLA'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Escolaridade
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'PÓS DOUTORADO',
            2 => 'DOUTORADO',
            3 => 'MESTRADO',
            4 => 'ESPECIALIZAÇÃO',
            5 => 'SUPERIOR COMPLETO',
            6 => 'SUPERIOR INCOMPLETO',
            7 => 'SEGUNDO GRAU COMPLETO',
            8 => 'SEGUNDO GRAU INCOMPLETO',
            9 => 'PRIMEIRO GRAU COMPLETO',
            10 => 'PRIMEIRO GRAU INCOMPLETO'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Estado
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'ACRE',
            2 => 'ALAGOAS',
            3 => 'AMAPÁ',
            4 => 'AMAZONAS',
            5 => 'BAHIA',
            6 => 'CEARÁ',
            7 => 'DISTRITO FEDERAL',
            8 => 'ESPÍRITO SANTO',
            9 => 'GOIÁS',
            10 => 'MARANHÃO',
            11 => 'MATO GROSSO',
            12 => 'MATO GROSSO DO SUL',
            13 => 'MINAS GERAIS',
            14 => 'PARÁ',
            15 => 'PARAÍBA',
            16 => 'PARANÁ',
            17 => 'PERNAMBUCO',
            18 => 'PIAUÍ',
            19 => 'RIO DE JANEIRO',
            20 => 'RIO GRANDE DO NORTE',
            21 => 'RIO GRANDE DO SUL',
            22 => 'RONDÔNIA',
            23 => 'RORAIMA',
            24 => 'SANTA CATARINA',
            25 => 'SÃO PAULO',
            26 => 'SERGIPE',
            27 => 'TOCANTINS',
            28 => 'OUTRO'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class EstadoCivil
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'SOLTEIRO',
            2 => 'CASADO',
            3 => 'SEPARADO',
            4 => 'DIVORCIADO',
            5 => 'VIÚVO'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Modalidade
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'LICENCIATURA',
            2 => 'BACHARELADO',
            3 => 'MBA',
            4 => 'TECNOLÓGO',
            5 => 'TÉCNICO',
            6 => 'ENSINO MÉDIO',
            7 => 'ENSINO FUNDAMENTAL'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Nacionalidade
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'BRASILEIRO(A) NATO (A)',
            2 => 'BRASILEIRO(A) NATURALIZADO (A)',
            3 => 'ESTRANGEIRO'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class NivelConhecimento
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'BÁSICO',
            2 => 'INTERMEDIÁRIO',
            3 => 'AVANÇADO'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class NivelHierarquico
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'ESTRATÉGICO OU INSTITUCIONAL',
            2 => 'TÁTICO OU INTERMEDIÁRIO',
            3 => 'GESTORES E SUPERVISORES',
            4 => 'OPERACIONAL'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Pais
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'BRASIL',
            2 => 'EXTERIOR'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class PretensaoSalarial
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'A COMBINAR',
            2 => 'ATÉ R$ 1.000,00',
            3 => 'DE R$ 1.000,00 ATÉ R$ 2.000,00',
            4 => 'DE R$ 2.000,00 ATÉ R$ 3.000,00',
            5 => 'DE R$ 3.000,00 ATÉ R$ 4.000,00',
            6 => 'DE R$ 4.000,00 ATÉ R$ 5.000,00',
            7 => 'DE R$ 5.000,00 ATÉ R$ 6.000,00',
            8 => 'DE R$ 6.000,00 ATÉ R$ 7.000,00',
            9 => 'DE R$ 7.000,00 ATÉ R$ 8.000,00',
            10 => 'DE R$ 8.000,00 ATÉ R$ 9.000,00',
            11 => 'DE R$ 9.000,00 ATÉ R$ 10.000,00',
            12 => 'DE R$ 10.000,00 ATÉ R$ 15.000,00',
            13 => 'DE R$ 15.000,00 ATÉ R$ 20.000,00',
            14 => 'DE R$ 20.000,00 ATÉ R$ 25.000,00',
            15 => 'DE R$ 25.000,00 ATÉ R$ 50.000,00',
            16 => 'ACIMA DE R$ 50.000,00'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Resposta
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'SIM',
            2 => 'NÃO'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Sexo
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'MASCULINO',
            2 => 'FEMININO'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}

class Situacao
{
    
    private static $valor_array;
    
    function __construct()
    {
        self::$valor_array = array(
            1 => 'CONCLUÍDO',
            2 => 'NÃO CONCLUÍDO',
            3 => 'EM ANDAMENTO'
        );
    }
    
    public static function ObterValorArray()
    {
        return self::$valor_array;
    }
}