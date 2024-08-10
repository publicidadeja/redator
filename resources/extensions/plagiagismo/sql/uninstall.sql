ALTER TABLE
    settings_two DROP COLUMN plagiarism_key;

DELETE FROM
    openai
WHERE
    slug = 'ai_plagiarism';

DELETE FROM
    openai
WHERE
    slug = 'ai_content_detect';