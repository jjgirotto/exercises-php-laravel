<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespostasController extends Controller
{
    public function calcularEx1(Request $request) {
        $valor1 = intval($request->input('valor1'));
        $valor2 = intval($request->input('valor2'));
        $soma = $valor1 + $valor2;
        if ($valor1 == $valor2) {
            $soma = 3 * $soma;
        }
        return view('ex1', compact('soma'));
    }
    
    public function calcularEx2(Request $request) {
        $valor1 = intval($request->input('valor1'));
        $valor2 = intval($request->input('valor2'));
        $valores = [$valor1, $valor2];
        if ($valor1 == $valor2) {
            $mensagem = "Números iguais: $valor1";
        } else {
            sort($valores);
            $mensagem = "$valores[0], $valores[1]";
        }
        return view('ex2', compact('mensagem'));
    }
    
    public function calcularEx3(Request $request) {
        $valor = floatval($request->input('valor'));
        if ($valor > 100) {
            $valor = $valor * 0.85;
        }
        return view('ex3', compact('valor'));
    }
    
    public function calcularEx4(Request $request) {
        $valor = intval($request->input('valor'));
        $primos = [];
        function ePrimo($valor) : bool {
            $soma = 0;
            for ($i=1; $i <= $valor; $i++) { 
                if ($valor % $i == 0) {
                    $soma++;
                }
            } if ($soma == 2) {
                return true;
            } return false;
        }
        for ($i=1; $i <= $valor; $i++) { 
            if (ePrimo($i)) {
                $primos[$i-1] = $i;
            }
        }
        return view('ex4', compact('primos'));
    }

    public function calcularEx5(Request $request) {
        $valor = intval($request->input('valor'));
        switch ($valor) {
            case '1':
                $mes = "Janeiro";
                break;
            case '2':
                $mes = "Fevereiro";
                break;
            case '3':
                $mes = "Março";
                break;
            case '4':
                $mes = "Abril";
                break;
            case '5':
                $mes = "Maio";
                break;
            case '6':
                $mes = "Junho";
                break;
            case '7':
                $mes = "Julho";
                break;
            case '8':
                $mes = "Agosto";
                break;
            case '9':
                $mes = "Setembro";
                break;
            case '10':
                $mes = "Outubro";
                break;
            case '11':
                $mes = "Novembro";
                break;
            case '12':
                $mes = "Dezembro";
                break;
            default:
                $mes = "Esse mês não existe!";
                break;
        }
        return view('ex5', compact('mes'));
    }

    public function calcularEx6(Request $request) {
        $valor = intval($request->input('valor'));
        for ($i=1; $i <= $valor; $i++) { 
            $resultado[] = $i;
        }
        return view('ex6', compact('resultado'));
    }
    
    public function calcularEx7(Request $request) {
        $valor = intval($request->input('valor'));
        $resultado = 0;
        $i = 1;
        while ($i <= $valor) {
            $resultado += $i;
            $i++;
        }
        return view('ex7', compact('resultado'));
    }

    public function calcularEx8(Request $request) {
        $valor = intval($request->input('valor'));
        do {
            $resultado[] = $valor;
            $valor--;
        } while ($valor >= 1);
        return view('ex8', compact('resultado'));
    }

    public function calcularEx9(Request $request) {
        $valor = intval($request->input('valor'));
        $resultado = 1;
        for ($i=2; $i <= $valor; $i++) { 
            $resultado *= $i;
        }
        return view('ex9', compact('resultado', 'valor'));
    }

    public function calcularEx10(Request $request) {
        $valor = intval($request->input('valor'));
        for ($i = 1; $i <= 10; $i++) {
            $tabuada[] = [
                'numero' => $i,
                'resultado' => $i * $valor
            ];
        }
        return view('ex10', compact('tabuada', 'valor'));
    }
}
