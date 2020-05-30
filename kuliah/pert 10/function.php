<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'data');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // jika hasilnya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
