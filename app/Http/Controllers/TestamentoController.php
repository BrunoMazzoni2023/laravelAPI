<?php

namespace App\Http\Controllers;

use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd('teste');
        return Testamento::create($request->all());
    }

    /**
     * Display the specified resource.
     * 
     * @param int $testamento
     * @return \illuminate\Http\Response
     */
    public function show(string $testamento)
    {
        $testamento = Testamento::find($testamento);
        if ($testamento) {
            $response = [
            'testamento' => $testamento,
            'livros' => $testamento->livros
            ];
            
            return $testamento;
        }
        return response()->json([
            'message' => 'Erro ao Pesquisar o testamento'
        ], 404);
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $testamento)
    {
        $testamento = Testamento::findOrFail($testamento);

        $testamento->update($request->all());

        return $testamento;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $testamento)
    {
        return Testamento::destroy($testamento);
    }
}
