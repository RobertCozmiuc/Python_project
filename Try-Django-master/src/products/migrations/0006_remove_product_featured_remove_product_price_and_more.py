# Generated by Django 4.0.5 on 2022-06-08 07:24

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('products', '0005_auto_20180708_1955'),
    ]

    operations = [
        migrations.RemoveField(
            model_name='product',
            name='featured',
        ),
        migrations.RemoveField(
            model_name='product',
            name='price',
        ),
        migrations.RemoveField(
            model_name='product',
            name='summary',
        ),
    ]
