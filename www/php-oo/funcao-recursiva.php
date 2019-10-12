<pre>

<?php

    $hierarquia = array(
        array(
            'nome_cargo'=>'CEO',
            'subordinados'=>array(
                array(
                    'nome_cargo'=>'Diretor Comercial',
                    'subordinados'=>array(
                        array(
                            'nome_cargo'=>'Gerente de Vendas'
                        )
                    )
                ),
                array (
                    'nome_cargo'=>'Dir. Financeiro',
                    'subordinados'=>array(
                        array(
                            'nome_cargo'=>'Gerente de Contas a Pagar',
                            'subordinado'=>array(
                                array(
                                    'nome_cargo'=>'Supervidor de Pagamentos'
                                )
                            )
                        ),
                        array(
                            'nome_cargo'=>'Gerente de Compras',
                            'subordinados'=>array(
                                array(
                                    'nome_cargo'=>'Supervisor de Suprimentos'
                                )
                            )
                        )             
                    )
                ) 
            )
        )
    );

    function exibir($cargo):String
    {
        $html = '<ul>';
        
        foreach ($cargo as $cargo) {
            
            $html .= '<li>';
            
            $html .= $cargo['nome_cargo'];

            if ( isset ($cargo['subordinados']) && count($cargo['subordinados']) > 0)
            {
                $html .= exibir($cargo['subordinados']);

            }

            $html .= '</li>';
            
        }

        $html  .= '</ul>';

        return $html;
    }

    echo exibir($hierarquia);