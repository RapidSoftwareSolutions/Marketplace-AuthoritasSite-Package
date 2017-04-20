<?php
$app->post('/api/AuthoritasSite/updateSite', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'apiSalt', 'domain', 'apiSecret', 'url', 'competitors', 'keywords', 'monitor']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API
    $query_str = $settings['api_url'];

    $time = time();
    $hashSource = $time . $post_data['args']['apiKey'] . $post_data['args']['apiSalt'];
    $hash = hash_hmac('sha256', $hashSource, $post_data['args']['apiSecret']);


    $test = 'KeyAuth';
    $test .= ' publicKey=' . $post_data['args']['apiKey'];
    $test .= ' hash=' . $hash;
    $test .= ' ts=' . $time;

    $body = array();
    $body['method'] = 'site.updateSite';
    $body['url'] = $post_data['args']['url'];
    $body['competitors'] = $post_data['args']['competitors'];
    $body['keywords'] = $post_data['args']['keywords'];
    $body['monitor_site'] = $post_data['args']['monitor'];
    if (isset($post_data['args']['jsonOptions']) && strlen($post_data['args']['jsonOptions']) > 0) {
        $body['JSON_options'] = $post_data['args']['jsonOptions'];
    }


    //requesting remote API
    $client = new GuzzleHttp\Client();

    try {

        $resp = $client->post($query_str, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => $test
            ],
            'json' => $body
        ]);

        $responseBody = $resp->getBody()->getContents();
        $rawBody = $resp->getBody();

        $all_data[] = $rawBody;
        if ($response->getStatusCode() == '200') {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($all_data) ? $all_data : json_decode($all_data);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {
        $responseBody = $exception->getResponse()->getReasonPhrase();
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $responseBody;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\BadResponseException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    }


    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});