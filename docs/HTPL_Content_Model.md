# HTPL Content Model

This document outlines the structured content model for the Harrison Township Public Library website, built using WordPress, Elementor, and Pods.

## 📁 Custom Post Types (CPTs)

| Post Type Slug        | Purpose                                         |
|------------------------|------------------------------------------------|
| `htpl_announcement`    | Library-wide updates and time-sensitive alerts |
| `htpl_eresource`       | Digital resources (e.g. databases, streaming)  |
| `htpl_document`        | Agendas, minutes, reports, policies, etc.      |
| `htpl_event`           | Public programs, workshops, and events         |
| `htpl_tutorial`        | Help articles and instructional content        |
| `htpl_library_service` | Library services such as printing, proctoring  |

## 🏷 Taxonomies

| Taxonomy Slug         | Purpose                                          |
|------------------------|--------------------------------------------------|
| `content_type`         | Unified content classification (badges/icons)   |
| `topic`                | Subject-based filtering                         |
| `audience`             | Target user groups (e.g. children, seniors)     |
| `service_area`         | Internal org unit or service responsibility     |
| `announcement_type`    | Categorizes alerts (holiday, emergency, etc.)   |
| `eresource_type`       | Format of eResources (streaming, ebooks, etc.)  |
