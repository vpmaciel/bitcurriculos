<?php

require_once 'retonar_cidade.php';

require_once 'remover_acento.php';



function retornar_cotacao_dolar() {
    
        $data = date('Y-m-d', strtotime('-3 days'));

        $data = explode("-",$data);
        list($ano,$mes,$dia) = $data;
        $data_str = $mes . '-'. $dia . '-' . $ano;
        $ch = curl_init("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='" . "$data_str" . "'&format=json");
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $res_curl = curl_exec($ch);
        if(curl_error($ch)) {
            echo curl_error($ch);
        } else {
            $resultado = json_decode($res_curl, true);
            $valores = $resultado["value"][0];
            //Agora será possível recuperar a informação da cotação do dólar:	
        
            echo "<p align=\"justify\">Dólar compra: R$ " . number_format($valores["cotacaoCompra"], 2, ',', '');
            echo ('
            ');
            echo ". Dolar venda: R$". number_format($valores["cotacaoVenda"], 2, ',', '');
            echo ('
            ');
            $dataHoraCotacao = new DateTime($valores["dataHoraCotacao"]);
            echo ". Data e hora da cotação: ". $dataHoraCotacao->format('d-m-Y H:i');
            echo "</p>";
        }
        curl_close($ch);        
    
}


function Idioma
{
    public static $VALOR = array(        
        0 => 'TODOS',
        1 => 'ALEMÃO',
        2 => 'ÁRABE',
        3 => 'BENGALI',
        4 => 'BÚLGARO',
        5 => 'CASTELHANO',
        6 => 'CHECO',
        7 => 'CHINÊS',
        8 => 'COREANO',
        9 => 'CROATA',
        10 => 'DINAMARQUÊS',
        11 => 'ESLOVACO',
        12 => 'ESLOVENO',
        13 => 'ESPANHOL',
        14 => 'ESTONIANO',
        15 => 'FINLANDÊS',
        16 => 'FRANCÊS',
        17 => 'GREGO',
        18 => 'HINDI',
        19 => 'HÚNGARO',
        20 => 'INGLÊS',
        21 => 'IRLANDÊS',
        22 => 'ITALIANO',
        23 => 'JAPONÊS',
        24 => 'LETÃO',
        25 => 'LITUANO',
        26 => 'MALTÊS',
        27 => 'NEERLANDÊS',
        28 => 'POLACO',
        29 => 'PORTUGUÊS',
        30 => 'ROMENO',
        31 => 'RUSSO',
        32 => 'SUECO',
        33 => 'TURCO',
        34 => 'VIETNAMITA'
        );
}

function Cnh
{
    public static $VALOR = array(
            0 => 'TODOS',
            1 => 'NÃO POSSUI',
            2 => 'A',
            3 => 'B',
        );
}

function Contrato
{
    public static $VALOR = array(
            0 => 'TODOS',
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

function Escolaridade
{
    public static $VALOR = array(
            0 => 'TODOS',
            1 => 'PÓS DOUTORADO', 
            2 => 'DOUTORADO', 
            3 => 'MESTRADO', 
            4 => 'PÓS GRADUAÇÃO', 
            5 => 'MBA', 
            6 => 'SUPERIOR',            
            7 => 'TECNÓLOGO', 
            8 => 'TÉCNICO',
            9 => 'SEGUNDO GRAU',
            10 => 'PRIMEIRO GRAU',
        );
}

function Estado
{
    public static $VALOR = array(
            0 => 'TODOS',
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
            27 => 'TOCANTINS'
        );
}

function EstadoCivil
{
    public static $VALOR = array(
            0 => 'TODOS',
            1 => 'SOLTEIRO',
            2 => 'CASADO',
            3 => 'SEPARADO',
            4 => 'DIVORCIADO',
            5 => 'VIÚVO'
        );
}

function Nacionalidade
{
    public static $VALOR = array(
            0 => 'TODAS',
            1 => 'BRASILEIRO(A) NATO (A)',
            2 => 'BRASILEIRO(A) NATURALIZADO (A)',
            3 => 'ESTRANGEIRO'
        );
}

function NivelConhecimento
{
    public static $VALOR = array(
            0 => 'TODOS',
            1 => 'BÁSICO',
            2 => 'INTERMEDIÁRIO',
            3 => 'AVANÇADO'
        );
}

function NivelConhecimentoIdioma
{
    public static $VALOR = array(
            0 => 'TODOS',
            1 => 'BÁSICO',
            2 => 'INTERMEDIÁRIO',
            3 => 'AVANÇADO',
            4 => 'FLUENTE',
        );
}
function Pais
{
    public static $VALOR = array(
        0 => 'TODOS',
        1 => 'BRASIL',
        2 => 'EXTERIOR'
    );
}

function PretensaoSalarial
{
    public static $VALOR = array(        
        0 => 'TODOS',
        1 => 'MÍNIMO DE R$ 1.000,00',
        2 => 'MÍNIMO DE R$ 1.500,00',
        3 => 'MÍNIMO DE R$ 2.000,00',
        4 => 'MÍNIMO DE R$ 2.500,00',
        5 => 'MÍNIMO DE R$ 3.000,00',
        6 => 'MÍNIMO DE R$ 3.500,00',
        7 => 'MÍNIMO DE R$ 4.000,00',
        8 => 'MÍNIMO DE R$ 4.500,00',
        9 => 'MÍNIMO DE R$ 5.000,00',
        10 => 'MÍNIMO DE R$ 5.500,00',
        11 => 'MÍNIMO DE R$ 6.000,00',
        12 => 'MÍNIMO DE R$ 6.500,00',
        13 => 'MÍNIMO DE R$ 7.000,00',
        14 => 'MÍNIMO DE R$ 7.500,00',
        15 => 'MÍNIMO DE R$ 8.000,00',
        16 => 'MÍNIMO DE R$ 8.500,00',
        17 => 'MÍNIMO DE R$ 9.000,00',
        18 => 'MÍNIMO DE R$ 9.500,00',
        19 => 'MÍNIMO DE R$ 10.000,00',
        20 => 'MÍNIMO DE R$ 11.000,00',
        21 => 'MÍNIMO DE R$ 12.000,00',
        22 => 'MÍNIMO DE R$ 13.000,00',
        23 => 'MÍNIMO DE R$ 14.000,00',
        24 => 'MÍNIMO DE R$ 15.000,00',
        25 => 'MÍNIMO DE R$ 16.000,00',
        26 => 'MÍNIMO DE R$ 17.000,00',
        27 => 'MÍNIMO DE R$ 18.000,00',
        28 => 'MÍNIMO DE R$ 19.000,00',
        29 => 'MÍNIMO DE R$ 20.000,00',
        30 => 'MÍNIMO DE R$ 25.000,00',
        31 => 'MÍNIMO DE R$ 30.000,00',
        32 => 'MÍNIMO DE R$ 35.000,00',
        33 => 'MÍNIMO DE R$ 40.000,00',
        34 => 'MÍNIMO DE R$ 45.000,00',
        35 => 'MÍNIMO DE R$ 50.000,00',
    );
}

function UltimoSalario
{
    public static $VALOR = array(        
        0 => 'TODOS',
        1 => 'DE R$ 1.000,00 ATÉ R$ 1.999,99',
        2 => 'DE R$ 2.000,00 ATÉ R$ 2.999,99',
        3 => 'DE R$ 3.000,00 ATÉ R$ 3.999,99',
        4 => 'DE R$ 4.000,00 ATÉ R$ 4.999,99',
        5 => 'DE R$ 5.000,00 ATÉ R$ 5.999,99',
        6 => 'DE R$ 6.000,00 ATÉ R$ 6.999,99',
        7 => 'DE R$ 7.000,00 ATÉ R$ 7.999,99',
        8 => 'DE R$ 8.000,00 ATÉ R$ 8.999,99',
        9 => 'DE R$ 9.000,00 ATÉ R$ 9.999,99',
        10 => 'DE R$ 10.000,00 ATÉ R$ 19.999,99',
        11 => 'DE R$ 20.000,00 ATÉ R$ 29.999,99',
        12 => 'DE R$ 30.000,00 ATÉ R$ 39.999,99',
        13 => 'DE R$ 40.000,00 ATÉ R$ 49.999,99',
        14 => 'ACIMA R$ 50.000,00',
    );
}
function Resposta
{
    public static $VALOR = array(
        0 => 'TODOS',
        1 => 'SIM',
        2 => 'NÃO'
    );
}

function Sexo
{
    public static $VALOR = array(
        0 => 'TODOS',
        1 => 'MASCULINO',
        2 => 'FEMININO'
    );
}

function Situacao
{
    public static $VALOR = array(
        0 => 'TODOS',
        1 => 'CONCLUÍDO',
        2 => 'NÃO CONCLUÍDO',
        3 => 'EM ANDAMENTO'
    );
}

function Usuario
{
    public static $VALOR = array(
        0 => 'TODOS',
        1 => 'CANDIDATO',
        2 => 'EMPRESA'
        
    );
}
function Erro
{
    public static $VALOR = array(            
            'SNI' => 'Sessão não iniciada ! Faça login !',
            'OPN' => 'Operação não realizada !',
            'BDNC' => 'Banco de dados não conectado !',
            'PNE' => 'Página não encontrada !',
            'EG' => 'Erro geral !',
            'EP' => 'Você não ter permissão para acessar esta página !',
            'TDI' => 'Tipos de dados imcompativeis !'
        );
}

function SegmentoEmpresarial
{
    public static $VALOR = array(
        0 => 'TODOS',
        1 => 'ACADEMIAS DE ARTES MARCIAIS',
        2 => 'ACADEMIAS DE MUSCULAÇÃO',
        3 => 'AÇOUGUES',
        4 => 'ADMINISTRAÇÃO PÚBLICA, DEFESA E SEGURIDADE SOCIAL',
        5 => 'ADMINISTRADORES',
        6 => 'ADVOGADOS',
        7 => 'AGÊNCIAS BANCÁRIAS',
        8 => 'AGÊNCIAS DE VIAGENS, OPERADORES TURÍSTICOS E SERVIÇOS DE RESERVAS',
        9 => 'AGRICULTURA, PECUÁRIA, PRODUÇÃO FLORESTAL, PESCA E SERVIÇOS RELACIONADOS',
        10 => 'AGRÔNOMOS',
        11 => 'ÁGUA, ESGOTO, ATIVIDADES DE GESTÃO DE RESÍDUOS E DESCONTAMINAÇÃO',
        12 => 'ALIMENTAÇÃO',
        13 => 'ALIMENTOS E BEBIDAS',
        14 => 'ALMOXARIFES',
        15 => 'ALOJAMENTO',
        16 => 'ALOJAMENTO E ALIMENTAÇÃO',
        17 => 'ALUGUÉIS NÃO-IMOBILIÁRIOS E GESTÃO DE ATIVOS INTANGÍVEIS NÃO-FINANCEIROS',
        18 => 'ANTIQUÁRIOS',
        19 => 'APRESENTADORES',
        20 => 'ÁRBITROS',
        21 => 'ARMAZENAMENTO E ATIVIDADES AUXILIARES DOS TRANSPORTES',
        22 => 'ARQUITETOS E URBANISTAS',
        23 => 'ARTE E ANTIGUIDADES',
        24 => 'ARTES, CULTURA, ESPORTE E RECREAÇÃO',
        25 => 'ARTESANATO',
        26 => 'ARTIGOS RELIGIOSOS',
        27 => 'ARTISTAS PLÁSTICOS',
        28 => 'ASSINATURAS E REVISTAS',
        29 => 'ASSISTENTES',
        30 => 'ASSISTENTES SOCIAIS',
        31 => 'ASTRÓLOGOS',
        32 => 'ATENDENTES',
        33 => 'ATIVIDADES ADMINISTRATIVAS E SERVIÇOS COMPLEMENTARES',
        34 => 'ATIVIDADES ARTÍSTICAS, CRIATIVAS E DE ESPETÁCULOS',
        35 => 'ATIVIDADES AUXILIARES DOS SERVIÇOS FINANCEIROS, SEGUROS E PLANOS DE SAÚDE',
        36 => 'ATIVIDADES CINEMATOGRÁFICAS, PRODUÇÃO DE VÍDEOS E DE PROGRAMAS DE TELEVISÃO',
        37 => 'ATIVIDADES DE APOIO À EXTRAÇÃO DE MINERAIS',
        38 => 'ATIVIDADES DE ATENÇÃO À SAÚDE HUMANA',
        39 => 'ATIVIDADES DE ATENÇÃO À SAÚDE HUMANA INTEGRADAS COM ASSISTÊNCIA SOCIAL',
        40 => 'ATIVIDADES DE EXPLORAÇÃO DE JOGOS DE AZAR E APOSTAS',
        41 => 'ATIVIDADES DE ORGANIZAÇÕES ASSOCIATIVAS',
        42 => 'ATIVIDADES DE PRESTAÇÃO DE SERVIÇOS DE INFORMAÇÃO',
        43 => 'ATIVIDADES DE RÁDIO E DE TELEVISÃO',
        44 => 'ATIVIDADES DE SEDES DE EMPRESAS E DE CONSULTORIA EM GESTÃO EMPRESARIAL',
        45 => 'ATIVIDADES DE SERVIÇOS FINANCEIROS',
        46 => 'ATIVIDADES DE VIGILÂNCIA, SEGURANÇA E INVESTIGAÇÃO',
        47 => 'ATIVIDADES DOS SERVIÇOS DE TECNOLOGIA DA INFORMAÇÃO',
        48 => 'ATIVIDADES ESPORTIVAS E DE RECREAÇÃO E LAZER',
        49 => 'ATIVIDADES FINANCEIRAS, DE SEGUROS E SERVIÇOS RELACIONADOS',
        50 => 'ATIVIDADES IMOBILIÁRIAS',
        51 => 'ATIVIDADES JURÍDICAS, DE CONTABILIDADE E DE AUDITORIA',
        52 => 'ATIVIDADES LIGADAS AO PATRIMÔNIO CULTURAL E AMBIENTAL',
        53 => 'ATIVIDADES PROFISSIONAIS, CIENTÍFICAS E TÉCNICAS',
        54 => 'ATIVIDADES VETERINÁRIAS',
        55 => 'ATORES',
        56 => 'AUTO ESCOLA',
        57 => 'AUTOMAÇÃO',
        58 => 'AUTOMÓVEIS E VEÍCULOS',
        59 => 'BABÁS',
        60 => 'BAILARINOS',
        61 => 'BANDAS DE MÚSICAS',
        62 => 'BARBEARIA',
        63 => 'BARES',
        64 => 'BAZARES',
        65 => 'BEBÊS E CIA',
        66 => 'BIBLIOTECAS',
        67 => 'BIÓLOGOS',
        68 => 'BIOMÉDICOS',
        69 => 'BIOTECNOLOGISTAS',
        70 => 'BOMBEIROS',
        71 => 'BRINDES / MATERIAIS PROMOCIONAIS',
        72 => 'BRINQUEDOS E GAMES',
        73 => 'BUFFET',
        74 => 'CANTORES',
        75 => 'CANTORES DE CASAMENTO',
        76 => 'CAPTAÇÃO, TRATAMENTO E DISTRIBUIÇÃO DE ÁGUA',
        77 => 'CARPINTEIROS',
        78 => 'CARTÓRIOS',
        79 => 'CASA DE TINTAS',
        80 => 'CASA E DECORAÇÃO',
        81 => 'CEMITÉRIOS',
        82 => 'CENTRO DE ESTÉTICA',
        83 => 'CERVEJEIROS',
        84 => 'CHEFES DE COZINHA',
        85 => 'CINEMAS',
        86 => 'CLÍNICAS MÉDICAS',
        87 => 'CLUBES ESPORTIVOS',
        88 => 'CLUBES SOCIAIS',
        89 => 'COLECIONÁVEIS',
        90 => 'COLETA, TRATAMENTO E DISPOSIÇÃO DE RESÍDUOS; RECUPERAÇÃO DE MATERIAIS',
        91 => 'COMÉRCIO E REPARAÇÃO DE VEÍCULOS AUTOMOTORES E MOTOCICLETAS',
        92 => 'COMÉRCIO POR ATACADO, EXCETO VEÍCULOS AUTOMOTORES E MOTOCICLETAS',
        93 => 'COMÉRCIO VAREJISTA',
        94 => 'COMÉRCIO; REPARAÇÃO DE VEÍCULOS AUTOMOTORES E MOTOCICLETAS',
        95 => 'COMIDA DELIVERY',
        96 => 'COMPRAS COLETIVAS',
        97 => 'CONFECÇÃO DE ARTIGOS DO VESTUÁRIO E ACESSÓRIOS',
        98 => 'CONFEITEIROS',
        99 => 'CONSTRUÇÃO',
        100 => 'CONSTRUÇÃO DE EDIFÍCIOS',
        101 => 'CONSTRUÇÃO E FERRAMENTAS',
        102 => 'CONSULTORES',
        103 => 'CONTADORES',
        104 => 'CONTADORES DE HISTÓRIA',
        105 => 'CORREIO E OUTRAS ATIVIDADES DE ENTREGA',
        106 => 'CORRETORES',
        107 => 'CORTINAS',
        108 => 'COSMÉTICOS E PERFUMARIA',
        109 => 'COSTUREIROS',
        110 => 'COZINHEIROS',
        111 => 'CRECHES',
        112 => 'CREMATÓRIOS',
        113 => 'CRIADOUROS',
        114 => 'CRONISTAS',
        115 => 'CURSOS E EDUCAÇÃO',
        116 => 'DANÇARINOS',
        117 => 'DANCETERIAS',
        118 => 'DECORADORES',
        119 => 'DENTISTAS',
        120 => 'DESCONTAMINAÇÃO E OUTROS SERVIÇOS DE GESTÃO DE RESÍDUOS',
        121 => 'DESENHISTAS',
        122 => 'DESIGNERS DE MODA',
        123 => 'DESTILADORES',
        124 => 'DETETIVES PARTICULARES',
        125 => 'DRAMATURGOS',
        126 => 'ECOLOGISTAS',
        127 => 'ECONOMISTAS',
        128 => 'EDIÇÃO E EDIÇÃO INTEGRADA À IMPRESSÃO',
        129 => 'EDITORES',
        130 => 'EDUCAÇÃO',
        131 => 'ELETRICIDADE, GÁS E OUTRAS UTILIDADES',
        132 => 'ELETRICISTAS',
        133 => 'ELETRODOMÉSTICOS',
        134 => 'ELETRÔNICOS',
        135 => 'EMISSORAS DE RÁDIO',
        136 => 'EMISSORAS DE TELEVISÃO',
        137 => 'EMPREGADAS DOMÉSTICAS',
        138 => 'EMPREGOS',
        139 => 'EMPRESAS DE TELEMARKETING',
        140 => 'ENCARREGADOS',
        141 => 'ENFERMEIROS',
        142 => 'ENGENHEIROS',
        143 => 'ENTREGAS DE BEBIDAS',
        144 => 'ENTREGAS DE GÁS',
        145 => 'ESCOLAS',
        146 => 'ESCOLAS DE MÚSICA',
        147 => 'ESCOLAS TÉCNICAS',
        148 => 'ESCRITORES',
        149 => 'ESGOTO E ATIVIDADES RELACIONADAS',
        150 => 'ESPORTE E LAZER',
        151 => 'ESTATÍSTICOS',
        152 => 'EXTRAÇÃO DE CARVÃO MINERAL',
        153 => 'EXTRAÇÃO DE MINERAIS METÁLICOS',
        154 => 'EXTRAÇÃO DE MINERAIS NÃO-METÁLICOS',
        155 => 'EXTRAÇÃO DE PETRÓLEO E GÁS NATURAL',
        156 => 'FABRICAÇÃO DE BEBIDAS',
        157 => 'FABRICAÇÃO DE CELULOSE, PAPEL E PRODUTOS DE PAPEL',
        158 => 'FABRICAÇÃO DE COQUE, DE PRODUTOS DERIVADOS DO PETRÓLEO E DE BIOCOMBUSTÍVEIS',
        159 => 'FABRICAÇÃO DE EQUIPAMENTOS DE INFORMÁTICA, PRODUTOS ELETRÔNICOS E ÓPTICOS',
        160 => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS',
        161 => 'FABRICAÇÃO DE MÁQUINAS, APARELHOS E MATERIAIS ELÉTRICOS',
        162 => 'FABRICAÇÃO DE MÓVEIS',
        163 => 'FABRICAÇÃO DE OUTROS EQUIPAMENTOS DE TRANSPORTE',
        164 => 'FABRICAÇÃO DE PRODUTOS ALIMENTÍCIOS',
        165 => 'FABRICAÇÃO DE PRODUTOS DE BORRACHA E DE MATERIAL PLÁSTICO',
        166 => 'FABRICAÇÃO DE PRODUTOS DE MADEIRA',
        167 => 'FABRICAÇÃO DE PRODUTOS DE METAL, EXCETO MÁQUINAS E EQUIPAMENTOS',
        168 => 'FABRICAÇÃO DE PRODUTOS DE MINERAIS NÃO-METÁLICOS',
        169 => 'FABRICAÇÃO DE PRODUTOS DIVERSOS',
        170 => 'FABRICAÇÃO DE PRODUTOS DO FUMO',
        171 => 'FABRICAÇÃO DE PRODUTOS FARMACOQUÍMICOS E FARMACÊUTICOS',
        172 => 'FABRICAÇÃO DE PRODUTOS QUÍMICOS',
        173 => 'FABRICAÇÃO DE PRODUTOS TÊXTEIS',
        174 => 'FABRICAÇÃO DE VEÍCULOS AUTOMOTORES, REBOQUES E CARROCERIAS',
        175 => 'FARMACÊUTICOS',
        176 => 'FAST FOOD',
        177 => 'FAXINEIRAS',
        178 => 'FAZENDAS',
        179 => 'FAZENDEIROS',
        180 => 'FERRAMENTEIROS',
        181 => 'FILÓSOFOS',
        182 => 'FISCAIS',
        183 => 'FÍSICOS',
        184 => 'FISIOTERAPEUTAS',
        185 => 'FLORES, CESTAS E PRESENTES',
        186 => 'FLORICULTORES',
        187 => 'FLORICULTURAS',
        188 => 'FONOAUDIÓLOGOS',
        189 => 'FORJADORES',
        190 => 'FORNEIROS',
        191 => 'FOTOGRAFIA',
        192 => 'FOTÓGRAFOS',
        193 => 'FUNDIDORES',
        194 => 'FUNERÁRIAS',
        195 => 'FUNILEIROS',
        196 => 'GARÇONS',
        197 => 'GEÓGRAFO',
        198 => 'GERENTES',
        199 => 'GUINCHOS',
        200 => 'GUINDASTES',
        201 => 'HOTÉIS',
        202 => 'IGREJAS / TEMPLOS / INSTITUIÇÕES RELIGIOSAS',
        203 => 'IMPRESSÃO E REPRODUÇÃO DE GRAVAÇÕES',
        204 => 'INDÚSTRIA, COMÉRCIO E NEGÓCIOS',
        205 => 'INDÚSTRIAS DE TRANSFORMAÇÃO',
        206 => 'INDÚSTRIAS EXTRATIVAS',
        207 => 'INFLÁVEIS PROMOCIONAIS',
        208 => 'INFORMAÇÃO E COMUNICAÇÃO',
        209 => 'INFORMÁTICA',
        210 => 'INGRESSOS',
        211 => 'INSPETORES',
        212 => 'INSTALADORES',
        213 => 'INSTRUMENTOS MUSICAIS',
        214 => 'INSTRUTORES',
        215 => 'INTÉRPRETES',
        216 => 'JARDINEIROS',
        217 => 'JOALHEIROS',
        218 => 'JOALHERIA',
        219 => 'LABORATARISTA',
        220 => 'LANCHONETES',
        221 => 'LAVA JATOS',
        222 => 'LAVRADORES',
        223 => 'LAZER',
        224 => 'LÍDERES',
        225 => 'LIVRARIAS',
        226 => 'LOCADORES',
        227 => 'LOCUTORES',
        228 => 'LOJISTAS',
        229 => 'LUBRIFICADORES',
        230 => 'LUTADORES DE ARTES MARCIAIS',
        231 => 'MADEIREIRAS',
        232 => 'MANICURES E PEDICURES',
        233 => 'MANUTENÇÃO, REPARAÇÃO E INSTALAÇÃO DE MÁQUINAS E EQUIPAMENTOS',
        234 => 'MARCENEIROS',
        235 => 'MASSAGISTAS',
        236 => 'MASSOTERAPEUTAS',
        237 => 'MATEMÁTICOS',
        238 => 'MECÂNICOS',
        239 => 'MÉDICOS',
        240 => 'MERCEARIA',
        241 => 'MESTRES',
        242 => 'METALURGIA',
        243 => 'MODA E ACESSÓRIOS',
        244 => 'MODELOS',
        245 => 'MOLDADORES',
        246 => 'MONITORES',
        247 => 'MONTADORES',
        248 => 'MOTÉIS',
        249 => 'MOTO TÁXI',
        250 => 'MOTORISTAS',
        251 => 'MÓVEIS PLANEJADOS',
        252 => 'MÚSICA DIGITAL',
        253 => 'NARRADORES',
        254 => 'NATAL',
        255 => 'NEGÓCIOS E OPORTUNIDADES',
        256 => 'NUTRICIONISTAS',
        257 => 'OBRAS DE INFRAESTRUTURA',
        258 => 'OCULISTAS',
        259 => 'OPERADORES',
        260 => 'ORGANISMOS INTERNACIONAIS E OUTRAS INSTITUIÇÕES EXTRATERRITORIAIS',
        261 => 'OUTRAS ATIVIDADES PROFISSIONAIS, CIENTÍFICAS E TÉCNICAS',
        262 => 'PADEIROS',
        263 => 'PALESTRANTES',
        264 => 'PALHAÇOS',
        265 => 'PAPELARIA E ESCRITÓRIO',
        266 => 'PARQUES DE DIVERSÕES',
        267 => 'PEDAGOGOS',
        268 => 'PEDREIROS',
        269 => 'PEIXARIAS',
        270 => 'PESCA E AQUICULTURA',
        271 => 'PESCADORES',
        272 => 'PESCARIA',
        273 => 'PESQUISA E DESENVOLVIMENTO CIENTÍFICO',
        274 => 'PESQUISADORES',
        275 => 'PET SHOP',
        276 => 'PILOTOS DE AVIÃO',
        277 => 'PILOTOS DE HELICÓPTERO',
        278 => 'PINTORES',
        279 => 'PIZZARIAS',
        280 => 'PLANTADORES',
        281 => 'PODÓLOGOS',
        282 => 'POLIDORES',
        283 => 'POSTOS DE GASOLINA',
        284 => 'POUSADAS',
        285 => 'PREPARAÇÃO DE COUROS E FABRICAÇÃO DE ARTEFATOS DE COURO',
        286 => 'PRODUÇÃO FLORESTAL',
        287 => 'PRODUTORES',
        288 => 'PROFESSORES',
        289 => 'PROFESSORES DE CEGOS',
        290 => 'PROFESSORES DE IDIOMAS',
        291 => 'PROFESSORES DE LIBRAS',
        292 => 'PROFESSORES DE MÚSICA',
        293 => 'PROFESSORES UNIVERSITÁRIOS',
        294 => 'PROGRAMADOR DE SOFTWARES',
        295 => 'PROJETISTAS',
        296 => 'PRÓTESES',
        297 => 'PSICÓLOGOS',
        298 => 'PUBLICIDADE E PESQUISA DE MERCADO',
        299 => 'PUBLICITÁRIOS',
        300 => 'QUÍMICOS',
        301 => 'QUITANDEIROS',
        302 => 'RECEPCIONISTAS',
        303 => 'REPARAÇÃO E MANUTENÇÃO DE EQUIPAMENTOS',
        304 => 'REPARADORES',
        305 => 'REPÓRTERES',
        306 => 'REPRESENTANTES',
        307 => 'RESTAURADORES',
        308 => 'RESTAURANTE',
        309 => 'RETIFICADORES',
        310 => 'RETOCADORES DE CALÇADOS',
        311 => 'ROUPEIROS',
        312 => 'SALÃO DE BELEZA',
        313 => 'SALÃO DE FESTAS',
        314 => 'SALGADEIROS',
        315 => 'SAPATEIROS',
        316 => 'SAÚDE',
        317 => 'SAÚDE HUMANA E SERVIÇOS SOCIAIS',
        318 => 'SECRETÁRIOS',
        319 => 'SEGURANÇAS PARTICULAR',
        320 => 'SEGUROS, RESSEGUROS, PREVIDÊNCIA COMPLEMENTAR E PLANOS DE SAÚDE',
        321 => 'SELEÇÃO, AGENCIAMENTO E LOCAÇÃO DE MÃO DE OBRA',
        322 => 'SERVIÇO ADVOCATÍCIOS',
        323 => 'SERVIÇO DE DISTRIBUIÇÃO DE JORNAIS / REVISTAS',
        324 => 'SERVIÇOS ADMINISTRATIVOS',
        325 => 'SERVIÇOS ARTÍSTICOS',
        326 => 'SERVIÇOS DE ABATEDOUROS / MATADOUROS',
        327 => 'SERVIÇOS DE AEROPORTOS',
        328 => 'SERVIÇOS DE AGÊNCIAS',
        329 => 'SERVIÇOS DE ALUGUEL / LOCAÇÃO',
        330 => 'SERVIÇOS DE ARMAZENAGEM',
        331 => 'SERVIÇOS DE ARQUITETURA E ENGENHARIA; TESTES E ANÁLISES TÉCNICAS',
        332 => 'SERVIÇOS DE ASSESSORIAS',
        333 => 'SERVIÇOS DE ASSISTÊNCIA SOCIAL SEM ALOJAMENTO',
        334 => 'SERVIÇOS DE ASSISTÊNCIA TÉCNICA / INSTALAÇÕES',
        335 => 'SERVIÇOS DE ASSOCIAÇÕES',
        336 => 'SERVIÇOS DE BANCOS DE SANGUE',
        337 => 'SERVIÇOS DE BIBLIOTECAS',
        338 => 'SERVIÇOS DE CARTÓRIOS',
        339 => 'SERVIÇOS DE CASAS LOTÉRICAS',
        340 => 'SERVIÇOS DE CONFECÇÕES',
        341 => 'SERVIÇOS DE CONSÓRCIOS',
        342 => 'SERVIÇOS DE CONSULTORIAS',
        343 => 'SERVIÇOS DE COOPERATIVAS',
        344 => 'SERVIÇOS DE DESPACHANTE',
        345 => 'SERVIÇOS DE ENGENHARIA',
        346 => 'SERVIÇOS DE ESCRITÓRIO',
        347 => 'SERVIÇOS DE ESTACIONAMENTOS',
        348 => 'SERVIÇOS DE ESTALEIROS',
        349 => 'SERVIÇOS DE EXPORTAÇÃO / IMPORTAÇÃO',
        350 => 'SERVIÇOS DE GEÓLOGOS',
        351 => 'SERVIÇOS DE JOALHEIROS',
        352 => 'SERVIÇOS DE LEILOEIROS',
        353 => 'SERVIÇOS DE LIMPEZA',
        354 => 'SERVIÇOS DE LOJA DE CONVENIÊNCIA',
        355 => 'SERVIÇOS DE MÃO DE OBRA',
        356 => 'SERVIÇOS DE ÓRGÃO PÚBLICOS',
        357 => 'SERVIÇOS DE PESQUISAS',
        358 => 'SERVIÇOS DE PORTOS',
        359 => 'SERVIÇOS DE SAÚDE / BEM ESTAR',
        360 => 'SERVIÇOS DE SEGURADORAS',
        361 => 'SERVIÇOS DE SEGURANÇA',
        362 => 'SERVIÇOS DE SINALIZAÇÃO',
        363 => 'SERVIÇOS DE SINDICATOS / FEDERAÇÕES',
        364 => 'SERVIÇOS DE TRADUÇÕES',
        365 => 'SERVIÇOS DE TRANSPORTE',
        366 => 'SERVIÇOS DE UTILIDADE PÚBLICA',
        367 => 'SERVIÇOS DOMÉSTICOS',
        368 => 'SERVIÇOS EM AGRICULTURA / PECUÁRIA / PISCICULTURA',
        369 => 'SERVIÇOS EM ALIMENTAÇÃO',
        370 => 'SERVIÇOS EM ARTE',
        371 => 'SERVIÇOS EM CINE / FOTO / SOM',
        372 => 'SERVIÇOS EM COMUNICAÇÃO',
        373 => 'SERVIÇOS EM CONSTRUÇÃO',
        374 => 'SERVIÇOS EM ECOLOGIA / MEIO AMBIENTE',
        375 => 'SERVIÇOS EM ELETROELETRÔNICA / METAL MECÂNICA',
        376 => 'SERVIÇOS EM FESTAS / EVENTOS',
        377 => 'SERVIÇOS EM INFORMÁTICA',
        378 => 'SERVIÇOS EM INTERNET',
        379 => 'SERVIÇOS EM JOIAS / RELÓGIOS / ÓTICAS',
        380 => 'SERVIÇOS EM TELEFONIA',
        381 => 'SERVIÇOS EM VEÍCULOS',
        382 => 'SERVIÇOS ESOTÉRICOS / MÍSTICOS',
        383 => 'SERVIÇOS ESPECIALIZADOS PARA CONSTRUÇÃO',
        384 => 'SERVIÇOS FINANCEIROS',
        385 => 'SERVIÇOS FUNERÁRIOS',
        386 => 'SERVIÇOS GERAIS',
        387 => 'SERVIÇOS GRÁFICOS / EDITORIAIS',
        388 => 'SERVIÇOS PARA ANIMAIS',
        389 => 'SERVIÇOS PARA DEFICIENTES',
        390 => 'SERVIÇOS PARA EDIFÍCIOS E ATIVIDADES PAISAGÍSTICAS',
        391 => 'SERVIÇOS PARA ESCRITÓRIOS',
        392 => 'SERVIÇOS PARA ROUPAS',
        393 => 'SERVIÇOS SOCIAIS / ASSISTENCIAIS',
        394 => 'SEX SHOP',
        395 => 'SHOPPING CENTERS',
        396 => 'SITIANTES',
        397 => 'SOLDADORES',
        398 => 'SONDADORES',
        399 => 'SUPERMERCADOS',
        400 => 'SUPERVISORES',
        401 => 'TABACARIA',
        402 => 'TABELIÕES',
        403 => 'TARIFAS BANCÁRIAS',
        404 => 'TARIFAS TELEFÔNICAS',
        405 => 'TÁXI',
        406 => 'TECELÕES',
        407 => 'TÉCNICOS',
        408 => 'TELECOMUNICAÇÕES',
        409 => 'TELEFONIA',
        410 => 'TELHADOS E CALHAS',
        411 => 'TRANSPORTE AÉREO',
        412 => 'TRANSPORTE AQUAVIÁRIO',
        413 => 'TRANSPORTE TERRESTRE',
        414 => 'TRANSPORTE, ARMAZENAGEM E CORREIO',
        415 => 'TURISMO',
        416 => 'TURISMÓLOGOS',
        417 => 'UNIVERSIDADES',
        418 => 'VENDA E LOCAÇÃO DE VEÍCULOS',
        419 => 'VENDEDORES',
        420 => 'VERDURÃO',
        421 => 'VETERINÁRIOS',
        422 => 'VIDENTES',
        423 => 'VIDRACEIROS',
        424 => 'VIGILANTES',
        425 => 'VISTORIADORES',
        426 => 'VIVEIRISTAS',
        427 => 'ZELADORES',
        428 => 'ZOOLÓGICOS',
        429 => 'ZOOTECNISTAS'        
        );
}

function TipoEmpresa
{
    public static $VALOR = array(
            0 => 'TODAS',
            1 => 'SOCIEDADE EMPRESÁRIA LIMITADA (LTDA.)',
            1 => 'EMPRESA INDIVIDUAL DE RESPONSABILIDADE LIMITADA (EIRELI)',
            2 => 'EMPRESA INDIVIDUAL',
            3 => 'MICROEMPREENDEDOR INDIVUAL (MEI)',
            4 => 'SOCIEDADE SIMPLES (SS)',
            5 => 'SOCIEDADE ANÔNIMA (SA)'
            
        );
}

$array_lista = Cnh::$VALOR;

$array_sexo = Sexo::$VALOR;

$array_escolaridade = Escolaridade::$VALOR;

$array_contrato = Contrato::$VALOR;

$array_pretensao_salarial = PretensaoSalarial::$VALOR;

$array_ultimo_salario = UltimoSalario::$VALOR;

$array_estado = Estado::$VALOR;

$array_erro = Erro::$VALOR;



$array_estado_civil = EstadoCivil::$VALOR;

$array_nacionalidade = Nacionalidade::$VALOR;

$array_pais = Pais::$VALOR;

$array_resposta = Resposta::$VALOR;

$array_situacao = Situacao::$VALOR;

$array_usuario = Usuario::$VALOR;

$array_nivel_conhecimento = NivelConhecimento::$VALOR;

$array_nivel_conhecimento_idioma = NivelConhecimentoIdioma::$VALOR;

$array_idioma = Idioma::$VALOR;

$array_segmento_empresa = SegmentoEmpresarial::$VALOR;

$array_tipo_empresa = TipoEmpresa::$VALOR;

$DOCTYPE = '<!DOCTYPE html>';

$HTML = '<html>';

$HTML_ = '</html>';

$HEAD = '<head>';

$HEAD_ = '</head>';

$BODY = '<body>';

$BODY_ = '</body>';

$DIV_ = '</div>';

$DIV_MAIN = '<div function="coluna direita">';

$TD = '<td>';

$TD_ = '</td>';

$TR = '<tr>';

$TR_ = '</tr>';

$H1 = '<h1>';

$H1_ = '</h1>';

$FORM_ = '</form>';

$TABLE = '<table align="center">';

$TABLE_ = '</table>';

$LABEL = '<label>';

$LABEL_ = '</label>';

$SELECT_ = '</select>';