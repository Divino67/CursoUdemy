<?php 

$hierarquia = array(
    array(
        'cargo_nome' => 'CEO',
        'subordinados' => array(
            //inicio: diretor comercial.
            array(
                'cargo_nome' => 'Diretor Comercial',
                'subordinados' => array(
                    //inicio: gerente de vendas.
                    array(
                        'cargo_nome' => 'Gerente de Vendas'
                    )
                    //termino: gerente de vendas.
                )
            ),
            //termino: diretor comercial.
            //inicio: diretor financeiro.
            array(
                'cargo_nome' => 'Diretor Financeiro',
                'subordinados' => array(
                    //inicio: gerente de contas a pagar.
                    array(
                        'cargo_nome' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            //inicio: supervisor de pagamentos.
                            array(
                                'cargo_nome' => 'Supervisor de Pagamentos'
                            )
                            //termino: supervisor de pagamentos.
                        )
                            ),
                    //termino: gerente de contas a pagar.
                        ),   //inicio: gerente de compras.
                    array(
                        'cargo_nome' => 'Gerente de Compras',
                        'subordinados' => array(
                            //inicio: supervisor de suprimentos.
                            array(
                                'cargo_nome' => 'Supervisor de Suprimentos'
                            )
                            //termino: supervisor de suprimentos.
                        )
                    )            
            )       //termino: gerente de compras.
            //termino: diretor financeiro.    
        )

    )

                            );

function exibe($cargos){


    $html = '<ul>';
    foreach($cargos as $cargo){

        $html .= "<li>";
        $html .= $cargo['cargo_nome'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ) {
            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";
    }



    $html .= "</ul>";

    return $html;

}

echo exibe($hierarquia)

?>