﻿// <auto-generated />
using System;
using API.Data;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;

namespace API.Migrations
{
    [DbContext(typeof(DataContext))]
    partial class DataContextModelSnapshot : ModelSnapshot
    {
        protected override void BuildModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("ProductVersion", "5.0.8");

            modelBuilder.Entity("API.Models.ITAccount", b =>
                {
                    b.Property<Guid>("ID")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("TEXT");

                    b.Property<string>("ADAccountID")
                        .HasColumnType("TEXT");

                    b.Property<string>("CurrentStep")
                        .HasColumnType("TEXT");

                    b.Property<string>("Matricule")
                        .HasColumnType("TEXT");

                    b.HasKey("ID");

                    b.ToTable("ITAccounts");
                });
#pragma warning restore 612, 618
        }
    }
}
