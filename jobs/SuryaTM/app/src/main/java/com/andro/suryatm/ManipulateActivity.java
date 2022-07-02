package com.andro.suryatm;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class ManipulateActivity extends AppCompatActivity {

    Button btnTambah;
    Button btnDataProduk;
    Button btnUbah;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_manipulate);

        btnDataProduk = findViewById(R.id.btnDataProduk);
        btnTambah = findViewById(R.id.btnTambah);
        btnUbah = findViewById(R.id.btnUbah);

        btnDataProduk.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(ManipulateActivity.this, ProductActivity.class);
                startActivity(intent);
            }
        });

        btnTambah.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(ManipulateActivity.this, TambahActivity.class);
                startActivity(intent);
            }
        });

        btnUbah.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(ManipulateActivity.this, UpdateActivity.class);
                startActivity(intent);
            }
        });

    }
}