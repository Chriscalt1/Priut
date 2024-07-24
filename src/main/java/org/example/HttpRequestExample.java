package org.example;

import org.apache.http.client.methods.CloseableHttpResponse;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.CloseableHttpClient;
import org.apache.http.impl.client.HttpClients;
import org.apache.http.util.EntityUtils;

public class HttpRequestExample {
    public static void main(String[] args) throws Exception {
        String url = "jetbrains://idea/navigate/reference?project=Priut&path=main/webapp/config.php";
        CloseableHttpClient httpClient = HttpClients.createDefault();
        HttpGet request = new HttpGet(url);

        request.setHeader("Content-Type", "application/json");

        CloseableHttpResponse response = httpClient.execute(request);
        int statusCode = response.getStatusLine().getStatusCode();
        System.out.println("Status code: " + statusCode);

        String responseBody = EntityUtils.toString(response.getEntity());
        System.out.println("Response body: " + responseBody);

        response.close();
        httpClient.close();
    }
}