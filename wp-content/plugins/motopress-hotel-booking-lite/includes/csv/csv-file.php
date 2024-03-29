<?php

namespace MPHB\CSV;

class CSVFile
{
    protected $filepath = '';
    protected $mode = 'w';

    /** @var resource|false */
    protected $file = null;

    public function __construct($file, $mode = 'w')
    {
        $this->filepath = $file;
        $this->mode = $mode;
    }

    public function __destruct() {
        if ($this->file !== false) {
            fclose($this->file);
        }
    }

    /**
     * @param array $fields
     * @return self
     */
    public function put($fields)
    {
        if (is_null($this->file)) {
            $this->file = fopen($this->filepath, $this->mode);
        }

        if ($this->file !== false) {
            // It's better to strip keys before calling fputcsv()
            // See https://www.php.net/manual/en/function.fputcsv.php#123807
            fputcsv($this->file, array_values($fields));
        }

        return $this;
    }
}
