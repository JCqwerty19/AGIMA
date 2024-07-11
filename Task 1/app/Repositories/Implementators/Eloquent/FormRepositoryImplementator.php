<?php

namespace App\Repositories\Implementators\Eloquent;

use App\Repositories\Interfaces\FormRepository;

use App\DTO\FormDataDTO;

class FormRepositoryImplementator implements FormRepository
{
    private $idx = 1;

    public function data(FormDataDTO $dto): bool
    {
        $filename = $this->getFileName();

        $file = $this->openFile($filename);

        $data = $this->convertData($dto);

        if ($file) {

            $this->write($file, $data);

            $this->close($file);

            return true;
        } else {
            return false;
        }
    }

    // INNER FUNCTIONS

    private function getFileName(): string
    {
        return 'Data/data' . $this->idx++ . '.txt';
    }

    private function openFile(string $filename)
    {
        return fopen($filename, 'w');
    }

    private function convertData(FormDataDTO $dto): string
    {
        return "Username: $dto->username\nEmail: $dto->email\n
        Rating: $dto->rating\nComment: $dto->comment";
    }

    private function write($file, string $data): void
    {
        fwrite($file, $data);
    }

    private function close($file): void
    {
        fclose($file);
    }
}