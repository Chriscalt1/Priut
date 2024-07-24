package org.example;

import org.apache.http.client.methods.CloseableHttpResponse;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.CloseableHttpClient;
import org.apache.http.impl.client.HttpClients;
import org.apache.http.util.EntityUtils;

public class HttpRequestExample {
    public static void main(String[] args) throws Exception {
        String url = "http://example.com/animals.php"; // Замените на реальный URL вашего сервера
        CloseableHttpClient httpClient = HttpClients.createDefault();
        HttpGet request = new HttpGet(url);

        // Установка заголовков
        request.setHeader("Content-Type", "application/json");

        // Отправка запроса и получение ответа
        CloseableHttpResponse response = httpClient.execute(request);
        int statusCode = response.getStatusLine().getStatusCode();
        System.out.println("Status code: " + statusCode);

        // Чтение содержимого ответа
        String responseBody = EntityUtils.toString(response.getEntity());
        System.out.println("Response body: " + responseBody);

        // Закрытие клиента и освобождение ресурсов
        response.close();
        httpClient.close();
    }
}