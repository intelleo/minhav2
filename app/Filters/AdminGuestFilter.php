<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminGuestFilter implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    if (session()->get('admin_logged_in')) {
      return redirect()->to('/admin');
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // Tidak diperlukan
  }
}
