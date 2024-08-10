INSERT INTO
  `openai` (
    `title`,
    `description`,
    `slug`,
    `active`,
    `questions`,
    `image`,
    `premium`,
    `type`,
    `created_at`,
    `updated_at`,
    `prompt`,
    `custom_template`,
    `tone_of_voice`,
    `color`,
    `filters`
  )
VALUES
  (
    'AI Plagiarism Checker',
    'Analylze text, comparing it against a vast database online content to identify potential plagiarism.',
    'ai_plagiarism',
    1,
    '[{\"name\":\"your_description\",\"type\":\"textarea\",\"question\":\"Description\",\"select\":\"\"}]',
    '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"48\" viewBox=\"0 96 960 960\" width=\"48\"><path d=\"M430 896V356H200V256h560v100H530v540H430Z\"/></svg>',
    0,
    'text',
    '2024-02-01 08:26:49',
    '2024-02-01 08:26:49',
    NULL,
    0,
    0,
    '#A3D6C2',
    'blog'
  );

INSERT INTO
  `openai` (
    `title`,
    `description`,
    `slug`,
    `active`,
    `questions`,
    `image`,
    `premium`,
    `type`,
    `created_at`,
    `updated_at`,
    `prompt`,
    `custom_template`,
    `tone_of_voice`,
    `color`,
    `filters`
  )
VALUES
  (
    'AI Content Detector',
    'Analylze text, comparing it against a vast database online content to AI writing content',
    'ai_content_detect',
    1,
    '[{\"name\":\"your_description\",\"type\":\"textarea\",\"question\":\"Description\",\"select\":\"\"}]',
    '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"48\" viewBox=\"0 96 960 960\" width=\"48\"><path d=\"M430 896V356H200V256h560v100H530v540H430Z\"/></svg>',
    0,
    'text',
    '2024-02-01 08:26:49',
    '2024-02-01 08:26:49',
    NULL,
    0,
    0,
    '#A3D6C2',
    'blog'
  );

ALTER TABLE
  settings_two
ADD
  COLUMN plagiarism_key VARCHAR(255) DEFAULT '';