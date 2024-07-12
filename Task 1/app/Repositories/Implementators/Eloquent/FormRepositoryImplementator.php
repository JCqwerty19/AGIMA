<?php

namespace App\Repositories\Implementators\Eloquent;

use App\Repositories\Interfaces\FormRepository;

use App\DTO\FormDataDTO;

class FormRepositoryImplementator implements FormRepository
{
    // Save data fucntion
    public function data(FormDataDTO $dto): void
    {
        // Get filename
        $filename = $this->getFileName();
        
        // Open file for add new data
        $file = $this->openFile($filename);

        // Convert data from object to the string
        $data = $this->convertData($dto);

        // Checking file for existanse
        if ($file) {
            
            // Add data to the file
            $this->write($file, $data);

            // Close file
            $this->close($file);
        }
    }

    // INNER FUNCTIONS

    // Get filename
    private function getFileName(): string
    {
        return 'data.txt';
    }

    // Open file for add new data
    private function openFile(string $filename)
    {
        return fopen($filename, 'a');
    }

    // Convert data from object to the string
    private function convertData(FormDataDTO $dto): string
    {
        return "\r\n\r\n===================\r\n\r\nUsername: $dto->username\r\nEmail: $dto->email\r\n
        Rating: $dto->rating\r\nComment: $dto->comment";
    }

    // Add data to the file
    private function write($file, string $data): void
    {
        fwrite($file, $data);
    }

    // Close file
    private function close($file): void
    {
        fclose($file);
    }
}