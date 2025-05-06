# 📚 HTPL Taxonomy Reference Guide for Content Administrators

This guide provides a complete overview of the custom taxonomies used on the Harrison Township Public Library website. These help organize content, enable dynamic filtering, and ensure consistent metadata across the site.

---

## 📌 Introduction

Taxonomies are labels that help group and categorize content across the site. This guide explains how to use them effectively for each content type.

---

## 🔍 Master Taxonomy Index

| Taxonomy         | Applies To                        | Type        | Purpose                              |
|------------------|-----------------------------------|-------------|--------------------------------------|
| `audience`        | All CPTs                          | Global      | Tag content by intended user group   |
| `topic`           | All CPTs                          | Global      | Describe the subject or theme        |
| `service_area`    | Services, Help Articles, Tutorials| Global      | Associate content with library services |
| `content_type`    | All content types                 | Global      | Internal grouping & display logic    |
| `announcement_type` | Announcements                  | Specialized | Clarify nature of announcement       |
| `event_type`      | Events                            | Specialized | Classify event format                |
| `document_type`   | Documents                         | Specialized | Define document type (e.g., agenda)  |
| `policy_category` | Policy documents only            | Specialized | Group policies by subject area       |
| `eresource_type`  | eResources                        | Specialized | Filter eResources by media format    |

---

## 📂 Taxonomy Details

### `audience`
Used to indicate who the content is for.

| Slug       | Label       | Description |
|------------|-------------|-------------|
| children   | Children    | Ages 0–12 |
| teens      | Teens       | Middle/high school students |
| adults     | Adults      | General adult users |
| educators  | Educators   | Teachers, librarians |
| caregivers | Caregivers  | Adults supporting others |
| students   | Students    | Academic learners (all ages) |

---

### `topic`
Describes the subject area of the content. Examples: technology, genealogy, parenting, etc.

Use these to help users filter by interest or need.

---

### `service_area`
Used for internal and external services provided by the library.

Examples:
- `public-computers`
- `printing-copying`
- `book-delivery`
- `ask-a-librarian`

---

### `content_type`
Set automatically per post type. Used internally to filter or format content types like:
- event
- help_article
- tutorial
- document
- eresource

---

### `announcement_type`

Used only for Announcements. Helps show what kind of message it is.

| Slug           | Label            |
|----------------|------------------|
| closure        | Closure / Hours  |
| emergency      | Emergency Alert  |
| job-posting    | Job Posting      |
| general-news   | General News     |

---

### `event_type`

Used only for Events.

| Slug         | Label            |
|--------------|------------------|
| storytime    | Storytime        |
| class        | Class / Workshop |
| meeting      | Meeting          |
| club         | Club             |
| drop-in      | Drop-in Session  |

---

### `document_type`

Used only for Documents.

| Slug         | Label           |
|--------------|-----------------|
| agenda       | Agenda          |
| minutes      | Minutes         |
| newsletter   | Newsletter      |
| policy       | Policy          |
| report       | Report          |
| notice       | Notice          |

---

### `policy_category`

Used only with `document_type = policy`.

| Slug           | Label                  |
|----------------|------------------------|
| circulation    | Circulation            |
| governance     | Governance             |
| behavior       | Code of Conduct        |
| internet       | Internet & Technology  |
| financial      | Financial Management   |
| facility       | Facilities             |
| outreach       | Outreach & Partnerships |

---

### `eresource_type`

Used only for eResources.

| Slug            | Label              |
|-----------------|--------------------|
| database        | Research Database  |
| ebooks          | eBooks             |
| audiobooks      | Audiobooks         |
| magazines       | Digital Magazines  |
| newspapers      | Newspapers         |
| streaming-video | Streaming Video    |
| music           | Music              |
| courses         | Online Courses     |
| reference       | Reference Tools    |
| genealogy       | Genealogy          |

---

## 🗂 Post Type to Taxonomy Crosswalk

| Post Type      | `audience` | `topic` | `service_area` | `document_type` | `policy_category` | `announcement_type` | `event_type` | `eresource_type` |
|----------------|------------|---------|----------------|------------------|--------------------|----------------------|--------------|-------------------|
| event          | ✅         | ✅      | ✅             |                  |                    |                      | ✅           |                   |
| tutorial       | ✅         | ✅      | ✅             |                  |                    |                      |              |                   |
| help_article   | ✅         | ✅      | ✅             |                  |                    |                      |              |                   |
| library_service| ✅         | ✅      | ✅             |                  |                    |                      |              |                   |
| announcement   | ✅         | ✅      |                |                  |                    | ✅                   |              |                   |
| document       |            | ✅      |                | ✅               | ✅ (if policy)     |                      |              |                   |
| eresource      | ✅         | ✅      |                |                  |                    |                      |              | ✅                |

---

## ✅ Admin Tips

- Use consistent terminology
- Assign multiple taxonomies where helpful
- Don’t create new terms unless necessary
- Use filters and auto-populated fields to streamline input

For more support, refer to the “Web Admin Handbook” or contact your developer.

## 📖 Appendix: Taxonomy Value Glossary

### `audience`

| Slug | Label | Description |
|------|-------|-------------|
| children | Children | For kids roughly ages 0–12 |
| teens | Teens | Middle and high school age readers and learners |
| adults | Adults | General adult audience, including lifelong learners |
| educators | Educators | Teachers, librarians, and school staff |
| caregivers | Caregivers | Parents, guardians, or adults supporting others (e.g., seniors, children) |
| students | Students | K–12 or college learners (use with tutorials, research, study help) |

### `topic`

| Slug | Label | Description |
|------|-------|-------------|
| reader-resources | Reader Resources | Tools and guides to help readers find, select, or manage reading material. |
| literacy | Literacy Support | Resources supporting reading development, adult literacy, and general language skills. |
| homework-help | Homework Help | Resources for students needing support with assignments, study tools, or tutoring. |
| research-databases | Research Databases | Access to databases for academic, personal, or professional research. |
| learning-at-home | Learning at Home | Educational tools and tutorials for self-guided or remote learning. |
| test-prep | Test Preparation | Resources for preparing for standardized tests, licensing exams, or school assessments. |
| college-career | College & Career | Information and tools for planning college admissions or exploring career paths. |
| students | Students | Content specifically targeted toward learners in academic settings. |
| educators | Educators | Tools and resources for teachers, librarians, and school staff. |
| technology | Technology | Help articles, tutorials, or resources focused on digital tools, software, and online access. |
| job-search | Job Search | Guides and tools to assist with resumes, job applications, and career advancement. |
| financial-aid | Financial Aid | Support for finding scholarships, loans, and financial literacy resources. |
| legal-resources | Legal Resources | Information on legal rights, procedures, and finding help with civil or criminal issues. |
| consumer-information | Consumer Information | Guides and reviews to help make informed decisions on purchases and services. |
| life-skills | Life Skills | Everyday skills for adults and teens, including money management, health literacy, and more. |
| early-literacy | Early Literacy | Programs and content supporting reading readiness and skill-building for young children. |
| parenting | Parenting | Supportive content for caregivers raising children, including behavior, health, and education. |
| caregiving | Caregiving | Resources for those supporting children, seniors, or individuals with special needs. |
| community-resources | Community Resources | Local support programs, nonprofit services, and assistance with housing, food, and health. |
| arts-crafts | Arts & Crafts | Creative activities and how-tos for makers of all ages. |
| music | Music | Streaming, downloading, or learning about music and musical skills. |
| streaming-video | Streaming Video | Access to film, educational content, and entertainment via digital platforms. |
| genealogy | Genealogy | Family history tools and research services, including access to historical records. |
| local-history | Local History | Materials and exhibits related to Harrison Township and nearby communities. |
| seniors | Seniors | Topics of interest to older adults, including leisure, health, and retirement resources. |

### `service-area`

| Slug | Label | Description |
|------|-------|-------------|
| library-cards | Library Cards | Services related to applying for, renewing, or managing your library card account. |
| borrowing | Borrowing & Renewals | How to check out, return, and renew items, including due dates and loan limits. |
| fines-fees | Fines & Fees | Information about overdue fines, lost item charges, and fee payment options. |
| holds-requests | Holds & Requests | Placing or managing holds on books, media, and other items from the catalog. |
| book-delivery | Book Delivery | Homebound or remote delivery services for eligible patrons. |
| ask-a-librarian | Ask a Librarian | Live or virtual assistance from library staff for questions and information needs. |
| research-help | Research Help | Support for locating reliable sources, citation tools, and using databases. |
| reader-advisory | Reading Recommendations | Help finding your next great read, including booklists and personalized suggestions. |
| public-computers | Public Computers | Access to library desktop computers and usage guidelines. |
| printing-copying | Printing & Copying | How to print, copy, or send documents using library equipment, including wireless options. |
| faxing-scanning | Faxing & Scanning | Availability of self-service or staff-assisted fax and scan services. |
| wi-fi-access | Wi-Fi Access | Free wireless internet access inside the library and how to connect. |
| classes-tutorials | Classes & Tutorials | Workshops and instructional programs for learning new skills and topics. |
| literacy-support | Literacy Support | Programs supporting early literacy, adult literacy, and ESL learners. |
| accessibility-services | Accessibility Services | Library tools and assistance for patrons with disabilities or special needs. |
| community-resources | Community Resources | Links to local services including housing, food, tax help, and more. |

### `announcement_type`

| Slug | Label | Description |
|------|-------|-------------|
| closure | Closure / Hours | Library closures, weather delays, holiday hours |
| event-update | Event Update | Changes or additions to events, programs, or classes |
| job-posting | Job Posting | Open staff or volunteer positions |
| service-change | Service Change | Updates to library services, policies, or availability |
| general-news | General News | Routine updates, seasonal messages, and library highlights |
| emergency | Emergency Alert | Time-sensitive notices like power outages or local emergencies |
| board-update | Board Update | Notices about board meetings, minutes, or policy adoptions |

### `event_type`

| Slug | Label | Description |
|------|-------|-------------|
| storytime | Storytime | Recurring youth programs |
| class | Class / Workshop | Instructional programs |
| meeting | Meeting | Board, committee, or civic meetings |
| club | Club | Book club, hobby group, etc. |
| drop-in | Drop-in Session | Tech help, passive programs |
| special-event | Special Event | One-off programs or performances |

### `eresource_type`

| Slug | Label | Description |
|------|-------|-------------|
| database | Research Database | Searchable collections of articles, journals, encyclopedias, or primary sources. |
| streaming-video | Streaming Video | On-demand video services offering films, documentaries, and educational programs. |
| ebooks | eBooks | Digital books available for reading online or downloading to a device. |
| audiobooks | Audiobooks | Digital audiobooks available for streaming or download. |
| magazines | Digital Magazines | Access to full-text digital magazines and periodicals. |
| newspapers | Newspapers | Current or archived digital newspapers, including local and national titles. |
| courses | Online Courses | Instructional platforms offering classes, tutorials, or self-paced learning. |
| music | Music | Streaming or downloadable music from licensed collections. |
| reference | Reference Tools | Online encyclopedias, dictionaries, and fact-finding resources. |
| genealogy | Genealogy | Databases and records for tracing family history and ancestry. |
