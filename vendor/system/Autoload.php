<?php

/**
 * Автолоад классов
 */
class Autoload
{
    /**
     * Запускатор
     */
    public function start()
    {
        self::getClass(self::findFolders('../vendor/'));
    }

    /**
     * Поиск библиотек в vendor-е
     *
     * @param $path
     *
     * @return array
     */
    private static function findFolders($path): array
    {
        $folders = [];

        $data = scandir($path);

        // сканируем директории в vendor
        foreach ($data as $folder) {
            if ($folder != '.' && $folder != '..' && is_dir($path . '/' . $folder)) {
                $folders[] = $path . $folder;

                // + сканируем на еще один уровень в глубь
                $child_folders = scandir("{$path}/{$folder}");

                foreach ($child_folders as $child_folder) {
                    if ($child_folder != '.' && $child_folder != '..' && is_dir("{$path}/{$folder}/{$child_folder}")) {
                        $folders[] = "{$path}{$folder}/{$child_folder}";
                    }
                }
            }
        }

        return $folders;
    }

    /**
     * Подключение классов
     *
     * @param $folders
     *
     * @return void
     */
    private static function getClass($folders): void
    {
        foreach ($folders as $folder) {
            $classes = scandir($folder);

            foreach ($classes as $class) {
                if ($class != '.' && $class != '..' &&
                    !is_dir("{$folder}/{$class}")) {
                    require_once("{$folder}/{$class}");
                }
            }
        }
    }
}