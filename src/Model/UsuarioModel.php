<?php

namespace Src\Model;

class UsuarioModel {

    public function __constructor(
        string $arg
    ){}

    public function getUsuario(){
        $usuario['Usuario'] = [
            "titulo" => "fillipi{dev}",
            "nome" => "Fillipi",
            "profissao" => "Desenvolvedor PHP",
            "texto" => "Bacharel em análise de sistemas desde 2012 e engajado em desenvolvimento web desde 2018.<br><br>
                        Venho buscando transformar problemas em soluções com linguagens de programação.<br><br>
                        Nas horas vagas, gosto de ir para barzinho com os amigos e viajar.",
            "links" => [
                "instagram" => "https://instagram.com/fillipidev",
                "twitter" => "https://twitter.com/_fillipis/",
                "linkedin" => "https://br.linkedin.com/in/fillipi-santos-dev",
                "github" => "https://github.com/Fillipis"
            ]
        ];
        return $usuario;
    }
}