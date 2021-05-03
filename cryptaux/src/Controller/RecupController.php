<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecupController extends AbstractController
{
    /**
     * @Route("/recup", name="recup")
     */
    public function index(): Response
    {
        $curl = curl_init('https://api.coinbase.com/v2/prices/BTC-EUR/spot');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $return = curl_exec($curl);
        curl_close($curl);

        $curl2 = curl_init('https://api.coinbase.com/v2/prices/LINK-EUR/spot');
        curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, 0);
        $return2 = curl_exec($curl2);
        curl_close($curl2);

        $curl3 = curl_init('https://api.coinbase.com/v2/prices/ETH-EUR/spot');
        curl_setopt($curl3, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl3, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl3, CURLOPT_SSL_VERIFYPEER, 0);
        $return3 = curl_exec($curl3);
        curl_close($curl3);

        $curl4 = curl_init('https://api.coinbase.com/v2/prices/XLM-EUR/spot');
        curl_setopt($curl4, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl4, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl4, CURLOPT_SSL_VERIFYPEER, 0);
        $return4 = curl_exec($curl4);
        curl_close($curl4);

        $curl5 = curl_init('https://api.coinbase.com/v2/prices/MANA-EUR/spot');
        curl_setopt($curl5, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl5, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl5, CURLOPT_SSL_VERIFYPEER, 0);
        $return5 = curl_exec($curl5);
        curl_close($curl5);

        $curl6 = curl_init('https://api.coinbase.com/v2/prices/MKR-EUR/spot');
        curl_setopt($curl6, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl6, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl6, CURLOPT_SSL_VERIFYPEER, 0);
        $return6 = curl_exec($curl6);
        curl_close($curl6);

        $curl7 = curl_init('https://api.coinbase.com/v2/prices/uni-EUR/spot');
        curl_setopt($curl7, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl7, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl7, CURLOPT_SSL_VERIFYPEER, 0);
        $return7 = curl_exec($curl7);
        curl_close($curl7);

        $curl8 = curl_init('https://api.coinbase.com/v2/prices/BTC-USD/spot');
        curl_setopt($curl8, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl8, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl8, CURLOPT_SSL_VERIFYPEER, 0);
        $return8 = curl_exec($curl8);
        curl_close($curl8);

        $curl9 = curl_init('https://api.coinbase.com/v2/prices/LINK-USD/spot');
        curl_setopt($curl9, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl9, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl9, CURLOPT_SSL_VERIFYPEER, 0);
        $return9 = curl_exec($curl9);
        curl_close($curl9);

        $curl10 = curl_init('https://api.coinbase.com/v2/prices/ETH-USD/spot');
        curl_setopt($curl10, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl10, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl10, CURLOPT_SSL_VERIFYPEER, 0);
        $return10 = curl_exec($curl10);
        curl_close($curl10);

        $curl11 = curl_init('https://api.coinbase.com/v2/prices/XLM-USD/spot');
        curl_setopt($curl11, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl11, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl11, CURLOPT_SSL_VERIFYPEER, 0);
        $return11 = curl_exec($curl11);
        curl_close($curl11);

        $curl12 = curl_init('https://api.coinbase.com/v2/prices/MANA-USD/spot');
        curl_setopt($curl12, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl12, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl12, CURLOPT_SSL_VERIFYPEER, 0);
        $return12 = curl_exec($curl12);
        curl_close($curl12);

        $curl13 = curl_init('https://api.coinbase.com/v2/prices/MKR-USD/spot');
        curl_setopt($curl13, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl13, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl13, CURLOPT_SSL_VERIFYPEER, 0);
        $return13 = curl_exec($curl13);
        curl_close($curl13);

        $curl14 = curl_init('https://api.coinbase.com/v2/prices/uni-USD/spot');
        curl_setopt($curl14, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl14, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl14, CURLOPT_SSL_VERIFYPEER, 0);
        $return14 = curl_exec($curl14);
        curl_close($curl14);
        
        return $this->render('recup/index.html.twig', 
        array(
        'BTC' => json_decode($return),
        'LNK' => json_decode($return2),
        'ETH' => json_decode($return3),
        'XLM' => json_decode($return4),
        'MANA' => json_decode($return5),
        'MKR' => json_decode($return6),
        'UNI' => json_decode($return7),
        'BTC_' => json_decode($return8),
        'LNK_' => json_decode($return9),
        'ETH_' => json_decode($return10),
        'XLM_' => json_decode($return11),
        'MANA_' => json_decode($return12),
        'MKR_' => json_decode($return13),
        'UNI_' => json_decode($return14)
        ));
        

    }
}
