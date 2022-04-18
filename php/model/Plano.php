<?php

class Plano
{
    private int $id;
    private string $tipo;
    private string $preco;
    private string $info1;
    private string $info2;
    private string $info3;
    private string $info4;
    private string $info5;
    private string $info6;
    private string $info7;
    private string $info8;
    private int $categoriaid;
    private string $criadoem;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }

    public function getPreco(): string
    {
        return $this->preco;
    }

    public function setPreco(string $preco): void {
        $this->preco = $preco;
    }

    public function getInfo1(): string
    {
        return $this->info1;
    }

    public function setInfo1(string $info1): void {
        $this->info1 = $info1;
    }


    public function getInfo2(): string
    {
        return $this->info2;
    }

    public function setInfo2(string $info2): void {
        $this->info2 = $info2;
    }


    public function getInfo3(): string
    {
        return $this->info3;
    }

    public function setInfo3(string $info3): void {
        $this->info3 = $info3;
    }


    public function getInfo4(): string
    {
        return $this->info4;
    }

    public function setInfo4(string $info4): void {
        $this->info4 = $info4;
    }


    public function getInfo5(): string
    {
        return $this->info5;
    }

    public function setInfo5(string $info5): void {
        $this->info5 = $info5;
    }


    public function getInfo6(): string
    {
        return $this->info6;
    }

    public function setInfo6(string $info6): void {
        $this->info6 = $info6;
    }


    public function getInfo7(): string
    {
        return $this->info7;
    }

    public function setInfo7(string $info7): void {
        $this->info7 = $info7;
    }


    public function getInfo8(): string
    {
        return $this->info8;
    }

    public function setInfo8(string $info8): void {
        $this->info8 = $info8;
    }


    public function getCategoriaId(): int {
        return $this->categoriaid;
    }

    public function setCategoriaId(int $categoriaid): void {
        $this->categoriaid = $categoriaid;
    }

    public function getCriadoEm(): string {
        return date('d/m/Y - H:i:s', strtotime($this->criadoem));
    }

    public function setCriadoEm(string $criadoem): void {
        $this->criadoem = $criadoem;
    }
}