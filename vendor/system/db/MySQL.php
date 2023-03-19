<?php

/**
 * Класс работы с MySQL
 */
class MySQL extends BaseDbModel
{
    public mysqli $mysql;
    public string $host             = 'localhost';
    public string $bd_username      = 'root';
    public string $bd_password      = 'Bacs1906';
    public string $bd_default_table = 'buxar';

    /**
     * Конструктор - подключение
     */
    public function __construct()
    {
        $this->mysql = new mysqli($this->host, $this->bd_username, $this->bd_password, $this->bd_default_table);
        $this->mysql->set_charset("utf8mb4");

        if ($this->mysql->connect_error) {
            die("При подключении возникла ошибка: " . $this->mysql->connect_error);
        }
    }

    /**
     * Получение настроек (временный метод)
     *
     * @return array
     */
    public function getSettings()
    {
        $result = '';

        $sql    = "SELECT project_id, project_key, default_region, default_language FROM settings";
        $result = $this->mysql->query($sql);
        $data   = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        } else {
            echo "Нет данных";
        }

        return $data;
    }
}